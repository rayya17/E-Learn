<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;

class GuruController extends Controller
{
    public function Dashboardguru(){
        return view('guru.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'berhasil logout');
    }

}
