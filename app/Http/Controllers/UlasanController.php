<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use App\Models\User;
use App\Models\Materi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $materi = Materi::all();
        return view('users.detailmateri_user', compact('user', 'materi'));
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
