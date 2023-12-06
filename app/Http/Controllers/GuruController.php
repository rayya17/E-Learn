<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Penarikansaldo;
use App\Models\Materi;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Models\Materi;
use Illuminate\Http\Request;



class GuruController extends Controller
{
    public function Dashboardguru(){
        // $user = Auth::id();
        // $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        $jumlahmateri = guru::count();
        $guru = Guru::with('user')->get();
        return view('guru.dashboardguru', compact('guru', 'jumlahmateri'));
    }

    public function materi(){
        $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        // $guru = Guru::with('user')->get();
        return view('guru.materi', compact('guru'));
    }
    /**
     * Display a listing of the resource.
     */

    public function Pengumpulantugas(Request $request){
        $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        return view('guru.pengumpulan', compact('guru'));
    }

    public function Penarikansaldo(Request $request){
        $mengajukan = new Penarikansaldo;
        $mengajukan->metodepembayaran = $request->metodepembayaran;
        $mengajukan->keterangan_pengajuan = $request->keterangan_pengajuan;
        $mengajukan->tujuan_pengajuan = $request->tujuan_pengajuan;
        $mengajukan->status = 'sedang mengajukan';

        $mengajukan->save();
        return view('guru.pengajuansaldo');
    }

    public function mengajukandana(Request $request, $id){
        // Temukan data berdasarkan ID
        $penarikansaldo = Penarikansaldo::findOrFail($id);

        // Ubah status menjadi "Telah diajukan"
        $penarikansaldo->guru_id = $request->guru_id;
        $penarikansaldo->status = 'Telah diajukan';
        $penarikansaldo->save();

        return redirect()->route('pengajuanguru')->with('success', 'Berhasil mengajukan dana!');
    }

    // public function profileGuru (){
    //     $user_id = Auth::id();
    //     $profileGuru = guru::all();
    //     return view ('guru.profileguru', compact ('user_id'));
    // }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'berhasil logout');
    }

}
