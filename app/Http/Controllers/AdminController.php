<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Mail\sendMail;
use App\Models\Guru;
use App\Models\Notifikasi;
use App\Models\User;
use App\Models\Materi;
use App\Models\penarikansaldo;
use App\Models\Pendapatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return view('admin.dashboard', compact('jumlahpemateri', 'jumlahsiswa', 'pendapatan', 'Notifikasi', 'unreadNotificationsCount'));
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

    public function Pengajuandana(){
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        return view('admin.pengajuandana', compact('Notifikasi', 'unreadNotificationsCount'));
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
        $guru = guru::all();
        $data = penarikansaldo::where('status', 'sedang mengajukan')->get();
        return view('admin.pengajuandana', compact('guru', 'data'));
    }

    public function terimapengajuan($id)
    {

    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'berhasil logout');
    }
}
