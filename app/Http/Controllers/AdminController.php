<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function Dashboardadmin(){
        return view ('admin.dashboard');
    }

   public function calonguru(Request $request){
    $calonguru = Guru::with('user')->whereHas('user',function($query){
    })->get();
    return view('admin.calonguru', compact('calonguru'));
   }

   public function guruterima(String $id){
    $user = User::where('role','gurunotapprove')->get();
    //Foreach mail

    $calonguru = Guru::where('id',$id)->first()->user_id;
    $user = User::where('id',$calonguru)->first();
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

        if($user){
            $user = User::where('role','gurunotapprove')->get();

            $user->delete();
        }
        return redirect()->route('calonguru');
    } catch (\Exception $e) {
        return redirect()->back();
    }
   }

   public function calongurulogin_create(){
    $gurulogin = Guru::all();
    return view('admin.calonguru',compact('gurulogin'));
   }

   public function calonguru_store(Request $request)
   {
    $gurulogin = $request->all();
    Guru::create($gurulogin);
    return redirect()->route('loginPage');
   }

   
   public function logout()
   {
       Auth::logout();

       request()->session()->invalidate();

       request()->session()->regenerateToken();

       return redirect()->route('loginPage')->with('success','berhasil logout');
   }
}
