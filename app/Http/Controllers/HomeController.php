<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Guru;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $materi = Materi::all();
        $guru = Guru::with('user')->get();
        return view('users.home',compact('materi', 'guru'));
    }

    public function detailpemesanan(){
        return view('users.detailpemesanan');
    }

    public function detailpesan(){
        return view('users.detailpesan');
    }
}
