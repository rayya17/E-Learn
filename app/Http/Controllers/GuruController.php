<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;


class GuruController extends Controller
{
    public function Dashboardguru(){
        return view('guru.dashboardguru');
    }

      public function materi(){
        return view('guru.materi');
    }
    /**
     * Display a listing of the resource.
     */
  
    public function Pengumpulantugas(){
        return view('guru.pengumpulan');
    }

    public function Penarikansaldo(){
        return view('guru.pengajuansaldo');
    }
    // public function index(){
    //     return view('guru.materi');
    // }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'berhasil logout');
    }

}
