<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\User;
use App\Models\Guru;
use App\Models\Materi;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $user = User::all();
        $materi = Materi::all();
        return view('users.detailmateri_user', compact('user', 'materi', 'Notifikasi', 'unreadNotificationsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ulasan' => 'required|max:225',
            // 'tanggal' => 'required'
        ]);

        Ulasan::create([
            'materi_id' => $request->materi,
            'user_id' => Auth::user()->id,
            'ulasan' => $request->ulasan,
            'tanggal' => now()
        ]);

        $notif = Materi::with('guru')->findOrFail($request->materi);

        // Notifikasi
        Notifikasi::create([
            'sender_id' => Auth::user()->id,
            'user_id' => $notif->guru->user_id,
            'title' => Auth::user()->name,
            'message' => 'Memberikan ulasan pada materi anda yang berjudul '. $notif->nama_materi,
        ]);

        return redirect()->route('HomePage')->with('success', 'Ulasan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ulasan $ulasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ulasan $ulasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ulasan $ulasan)
    {
        $request->validate([
            'materi_id' => 'required',
            'user_id' => 'required',
            'ulasan' => 'required|max:225',
            // 'tanggal' => 'required'
        ]);

        $ulasan->update([
            'materi_id' => $request->materi_id,
            'user_id' => $request->user_id,
            'ulasan' => $request->ulasan,
            'tanggal' => now()
        ]);

        return back()->with('success', 'Ulasan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ulasan $ulasan)
    {
        $ulasan->delete();

        return back()->with('success', 'Ulasan berhasil dihapus');
    }
}
