<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Mail\sendMail;
use App\Models\Guru;
use App\Models\Notifikasi;
use App\Models\User;
use App\Models\Materi;
use App\Models\Order;
use App\Models\penarikansaldo;
use App\Models\Pendapatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function Dashboardadmin()
    {
        
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $jumlahpemateri = user::where('role', 'guru')->count();
        $jumlahsiswa = user::where('role', 'user')->count();
        $pendapatan = Pendapatan::all()->where('user_id', auth()->id())->pluck('pendapatan')->sum();
        $topMateriOrders = Order::select('materi_id')
    ->selectRaw('COUNT(*) as total_orders')
    ->where('status', 'paid')
    ->has('Materi') // Pastikan relasi Materi ada
    ->has('user')   // Pastikan relasi User ada
    ->groupBy('materi_id')
    ->orderByDesc('total_orders')
    ->with('Materi')
    ->take(5)
    ->get();
        $materi = Materi::all();

        return view('admin.dashboard', compact('jumlahpemateri', 'jumlahsiswa', 'pendapatan', 'Notifikasi', 'unreadNotificationsCount', 'materi', 'topMateriOrders'));
    }

    public function getMonthlyIncomeData()
{
    $monthlyIncomeData = Pendapatan::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(pendapatan) as total_income')
        ->where('user_id', auth()->id())
        ->groupByRaw('YEAR(created_at), MONTH(created_at)')
        ->orderByRaw('YEAR(created_at) ASC, MONTH(created_at) ASC')
        ->get();


    return response()->json(['data' => $monthlyIncomeData]);
}
public function getYearIncomeData()
{
    $yearIncomeData = Pendapatan::selectRaw('YEAR(created_at) as year, SUM(pendapatan) as total_income')
        ->where('user_id', auth()->id())
        ->groupByRaw('YEAR(created_at)')
        ->orderByRaw('YEAR(created_at) ASC')
        ->get();

    return response()->json(['data' => $yearIncomeData]);
}

    public function Profileguru(){
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        // $profileguru = guru::all();
        $profileguru = Guru::with('user')->get();
        $guruprofile = Guru::all();
        // dd($profileguru);
        return view('admin.profileguru', compact('profileguru','guruprofile', 'Notifikasi', 'unreadNotificationsCount'));
    }



    public function Detailguru($id){
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $gurudetail = Guru::where('id',$id)->with('user')->get();
        // $gurudetail = guru::all();
        return view('admin.detailguru', compact( 'gurudetail', 'Notifikasi', 'unreadNotificationsCount'));
    }

    public function calonguru(Request $request){
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $calonguru = Guru::with('user')->whereHas('user',function($query){
            $query->where('role','=','gurunotapprove');})->get();

    return view('admin.calonguru', compact('calonguru', 'Notifikasi', 'unreadNotificationsCount'));
   }

    public function guruterima(String $id)
    {
        $user = User::where('role', 'gurunotapprove')->get();
        //Foreach mail
        foreach ($user as $User) {
            Mail::to($User->email)->send(new sendEmail($User, 'terima'));
        }

        $calonguru = Guru::where('id', $id)->first()->user_id;
        $user = User::where('id', $calonguru)->first();
        $user->role = 'guru';
        $user->save();

        return redirect()->route('calonguru');
    }

    public function tolakguru($id)
    {
        try {
            $gurulogin = Guru::findOrFail($id);
            $gurulogin->delete();
            $user = User::findOrFail($gurulogin->user_id);

            if ($user) {
                $user = User::where('role', 'gurunotapprove')->get();
                foreach($user as $User){
                    Mail::to($User->email)->send(new sendMail($User,'tolak'));
                }

                $user->delete();
            }
            return redirect()->route('calonguru');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function calongurulogin_create()
    {
        $gurulogin = Guru::all();
        return view('admin.calonguru', compact('gurulogin'));
    }

    public function calonguru_store(Request $request)
    {
        $gurulogin = $request->all();
        Guru::create($gurulogin);
        return redirect()->route('loginPage');
    }



    public function pengajuanguru(Request $request){
        $data = penarikansaldo::all();
        $guru = penarikansaldo::where('status', 'telah diajukan')->get();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        return view('admin.pengajuandana', compact('data','guru', 'Notifikasi', 'unreadNotificationsCount'));
    }


    public function terimapengajuan($id)
    {
        $pengajuanPenjual = penarikansaldo::findOrFail($id);
        $pengajuanPenjual->status = 'pengajuanDiterima';
        $pengajuanPenjual->save();
        $pendapatan = Pendapatan::where('user_id', $pengajuanPenjual->user_id)->first();
        $pendapatan->pendapatan = 0;
        $pendapatan->save();

        $guru = User::where('role', 'guru')->first();
        Notifikasi::create([
            'sender_id' => Auth::user()->id,
            'user_id' => $guru->id,
            'title' => Auth::user()->name,
            'message' => Auth::user()->name . " Penarikan saldo status " . $pengajuanPenjual->status,
        ]);

        return redirect()->back()->with('success', 'pengambilan saldo telah di setujui');
    }

    public function tolakpengajuan($id)
    {
        $pengajuanPenjual = penarikansaldo::findOrFail($id);
        $pengajuanPenjual->status = 'pengajuanDitolak';
        $pengajuanPenjual->save();

        $guru = User::where('role', 'guru')->first();
        Notifikasi::create([
            'sender_id' => Auth::user()->id,
            'user_id' => $guru->id,
            'title' => Auth::user()->name,
            'message' => Auth::user()->name . " Penarikan saldo status " . $pengajuanPenjual->status,
        ]);

        return redirect()->back()->with('error', 'pengambilan saldo di tolak');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'berhasil logout');
    }
}

