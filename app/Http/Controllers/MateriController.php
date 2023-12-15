<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Materi;
use Illuminate\Http\File;
use App\Models\Notifikasi;
use App\Models\PenarikanSaldo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;

class MateriController extends Controller
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
        $user = Auth::id();
        $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        $guru = Guru::with('user')->get();
        return view('guru.materi', compact('materi', 'guru', 'Notifikasi', 'unreadNotificationsCount'));
        // return view('guru.materi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            // 'cover_materi' => 'required|mimes:png,jpg',
            'mapel' => 'required|max:100',
            'nama_materi' => 'required|max:100',
            'keterangan_benefit' => 'required|max:225',
            'kelas' => 'required|min:0|max:15',
            'harga' => 'required|min:0',
            'deskripsi_materi' => 'required|max:225',

            // 'tanggal_tugas' => 'required|after_or_equal:today|before_or_equal:today'
        ], [
            'nama_materi.required' => 'Wajib di isi',
            'nama_materi.max' => 'Nama Materi melebihi maximal',
            'keterangan_benefit.required' => 'Wajib di isi',
            'keterangan_benefit.max' => 'Keterangan Benefits melebihi maximal',
            'mapel.required' => 'Wajib di isi',
            'mapel.max' => 'Nama mata pelajaran melebihi maximal',
            'kelas.required' => 'Wajib di isi',
            'kelas.min' => 'Kelas kurang dari 0',
            'kelas.max' => 'Kelas melebihi maximal',
            'harga.required' => 'Wajib di isi',
            'harga.min' => 'Harga kurang 0',
            'deskripsi_materi.required' => 'Wajib di isi',
            'deskripsi_materi.max' => 'Deskripsi melebihi maximal',
        ]);
        try {
            $dataGuru = Guru::where('user_id', Auth()->user()->id)->first();

            $materi = Materi::create([
                'mapel' => $request->mapel,
                'nama_materi' => $request->nama_materi,
                'guru_id' => $dataGuru->id,
                'kelas' => $request->kelas,
                'harga' => $request->harga,
                'deskripsi_materi' => $request->deskripsi_materi,
                'keterangan_benefit' => $request->keterangan_benefit,
                'tanggal_materi' => now()
            ]);

            $admin = User::where('role', 'admin')->first();

            Notifikasi::create([
                'sender_id' => Auth::user()->id,
                'user_id' => $admin->id,
                'title' => Auth::user()->name,
                'message' => Auth::user()->name . " menambahkan materi baru bernama " . $materi->nama_materi ,
            ]);

            return back()->with('success', 'Berhasil menambahkan materi');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan materi. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        return view('guru.detailmateri', compact('materi'));
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
    public function update(Request $request, $materi)
    {
        $request->validate([
            'mapel' => 'required|max:100',
            'nama_materi' => 'required|max:100',
            'kelas' => 'required|min:0|max:15',
            'harga' => 'required|min:0',
            'deskripsi_materi' => 'required|max:225',

            // 'tanggal_tugas' => 'required|after_or_equal:today|before_or_equal:today'
        ], [
            'nama_materi.required' => 'Wajib di isi',
            'nama_materi.max' => 'Nama Materi melebihi maximal',
            'mapel.required' => 'Wajib di isi',
            'mapel.max' => 'Nama mata pelajaran melebihi maximal',
            'kelas.required' => 'Wajib di isi',
            'kelas.min' => 'Kelas kurang dari 0',
            'kelas.max' => 'Kelas melebihi maximal',
            'harga.required' => 'Wajib di isi',
            'harga.min' => 'Harga kurang 0',
            'deskripsi_materi.required' => 'Wajib di isi',
            'deskripsi_materi.max' => 'Deskripsi melebihi maximal',
        ]);
        try {

            $materi = Materi::findOrFail($materi);

            $dataGuru = Guru::where('user_id', Auth()->user()->id)->first();
            // Jika tidak ada file baru diunggah, hanya update informasi lainnya
            $materi->update([
                'mapel' => $request->mapel,
                'nama_materi' => $request->nama_materi,
                'guru_id' => $dataGuru->id,
                // 'keterangan_benefit' => $request->keterangan_benefit,
                'kelas' => $request->kelas,
                'harga' => $request->harga,
                'deskripsi_materi' => $request->deskripsi_materi,
                'tanggal_materi' => now()
            ]);

            return redirect()->route('materidetail',$materi->id)->with('success', 'Materi berhasil diupdate!');
        } catch (\Exception $e) {
            return redirect()->route('materidetail',$materi->id)->with('error', 'Gagal mengupdate materi. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        try {
            // Check if there are associated records in penarikansaldos
            $relatedRecordsCount = $materi->penarikansaldos()->count();

            if ($relatedRecordsCount > 0) {
                return back()->with('error', 'Materi tidak dapat dihapus karena telah di order.');
            }

            // // Hapus file terkait jika ada
            // $filePath = public_path('pdf_files') . '/' . $materi->file_materi;
            // if (File::exists($filePath)) {
            //     File::delete($filePath);
            // }

            // Hapus record dari database
            $materi->delete();

            return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus!');
        } catch (QueryException $e) {
            // Handle database errors, such as integrity constraint violation
            return back()->with('error', 'Gagal menghapus materi. Silakan coba lagi.');
        }
    }


}
