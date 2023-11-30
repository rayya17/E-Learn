<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('users.home');
    }

    public function detailpemesanan(){
        return view('users.detailpemesanan');
    }
}
