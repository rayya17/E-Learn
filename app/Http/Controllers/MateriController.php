<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guru.materi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $request->validate([
            // 'cover_materi' => 'required|mimes:png,jpg',
            'mapel' => 'required|max:100',
            'nama_materi' => 'required|max:100',
            'file_materi' => 'required|mimes:pdf',
            'kelas' => 'required|gt:0|max:15',
            'harga' => 'required|gt:0',
            'deskripsi' => 'required|max:225',
            'tugas' => 'required|max:225',
            'detail_tugas' => 'required|max:500',
            'tanggal_tugas' => 'required'
        ],[
            // 'cover_materi.required' => 'Wajib di isi'
        ]);

        // $cover_materi = $request->file('cover_materi');
        // $cover = Str::random(40) . '.' . $cover_materi->getClientOriginalExtension();
        // $request->cover_materi->storeAs('cover_materi', $cover, 'public');

        $materi = Materi::create([
            'mapel' => $request->mapel,
            'nama_materi' => $request->nama_materi,
            'file_materi' => $request->file_materi,
            // 'cover_materi' => $cover,
            'kelas' => $request->kelas,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'tugas' => $request->tugas,
            'detail_tugas' => $request->detail_tugas,
            'tanggal_tugas' => $request->tanggal_tugas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        //
    }
}
