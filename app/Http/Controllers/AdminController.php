<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Mail\sendMail;
use App\Models\Guru;
use App\Models\User;
use App\Models\penarikansaldo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function Dashboardadmin()
    {
        $jumlahpemateri = user::where('role', 'guru')->count();
        $jumlahsiswa = user::where('role', 'user')->count();
        return view('admin.dashboard', compact('jumlahpemateri', 'jumlahsiswa'));
    }

    public function Profileguru(){
        // $profileguru = guru::all();
        $profileguru = user::where('role', 'guru')->get();
        return view('admin.profileguru', compact('profileguru'));
    }

    public function Pengajuandana(){
        return view('admin.pengajuandana');
    }

    public function Detailguru($id){
        $user_id = Auth::id();
        // $profileguru = guru::all();
        return view('admin.detailguru', compact( 'user_id'));
    }

    public function calonguru(Request $request){
    $calonguru = Guru::with('user')->whereHas('user',function($query){
    })->get();
    return view('admin.calonguru', compact('calonguru'));
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
