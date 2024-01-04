<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\DetailMateri;
use App\Models\Materi;
use App\Models\Guru;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class DetailMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $guru = Guru::with('materi')->where('user_id', Auth::user()->id)->first();
        $materi = $guru->materi;
        // $detailmateri = DetailMateri::all();
        return view('guru.detailmateri',compact('materi', 'guru', 'Notifikasi', 'unreadNotificationsCount'));
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
            'keterangan' => 'required|max:500',
            'materi_id' => 'required'
        ],[
            'keterangan.required' => 'Wajib di isi',
            'keterangan.max' => 'Keterangan melebihi maksimum',
            'materi_id.required' => 'Wajib di isi'
        ]);
        $DataGuru = Guru::where('user_id', Auth()->user()->id)->first();

        $detailmateri = DetailMateri::create([
            'materi_id' => $request->materi_id,
            'keterangan' => $request->keterangan,
            'guru_id' => $DataGuru->id,
        ]);

        return back()->with('success', 'Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailMateri $detailMateri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailMateri $detailMateri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'keterangan' => 'required|max:500',
            'materi_id' => 'required'
        ], [
            'keterangan.required' => 'Wajib di isi',
            'keterangan.max' => 'Keterangan melebihi maksimum',
            'materi_id.required' => 'Wajib di isi'
        ]);
        $DataGuru= Guru::where('user_id', Auth()->user()->id)->first();

        // Use the correct case for the variable
        $detailMateri = DetailMateri::findOrFail($id)->update([
            'materi_id' => $request->materi_id,
            'keterangan' => $request->keterangan,
            'guru_id' => $DataGuru->id,
        ]);


        return back()->with('success', 'Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $detailMateri=DetailMateri::FindOrFail($id);
        $detailMateri->delete();

        return back()->with('success', 'Berhasil dihapus');
    }
}
