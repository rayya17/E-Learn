<?php

namespace App\Http\Controllers;

use File;
use App\Models\Materi;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::all();
        // $user = Auth::id();
        // $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        $guru = Guru::with('user')->get();
        return view('guru.materi',compact('materi', 'guru'));
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
            'file_materi' => 'required|mimes:pdf',
            'kelas' => 'required|min:0|max:15',
            'harga' => 'required|min:0',
            'deskripsi' => 'required|max:500',
            'tugas' => 'required|max:100',
            'detail_tugas' => 'required|max:500',
            'tanggal_tugas' => 'required|after_or_equal:today|before_or_equal:today'
        ],[
            'nama_materi.required' => 'Wajib di isi',
            'nama_materi.max' => 'Nama Materi melebihi maximal',
            'mapel.required' => 'Wajib di isi',
            'mapel.max' => 'Nama mata pelajaran melebihi maximal',
            'kelas.required' => 'Wajib di isi',
            'kelas.min' => 'Kelas kurang dari 0',
            'kelas.max' => 'Kelas melebihi maximal',
            'file_materi.required' => 'Wajib di isi',
            'file_materi.mimes' => 'File harus berupa PDF',
            'harga.required' => 'Wajib di isi',
            'harga.min' => 'Harga kurang 0',
            'deskripsi.required' => 'Wajib di isi',
            'deskripsi.max' => 'Deskripsi melebihi maximal',
            'tugas.required' => 'Wajib di isi',
            'tugas.max' => 'Nama Tugas melebihi maximal',
            'detail_tugas.required' => 'Wajib di isi',
            'detail_tugas.max' => 'Detail Tugas melebihi maximal',
            'tanggal_tugas.required' => 'Wajib di isi',
            'tanggal_tugas.after_or_equal' => 'Tanggal tidak boleh sesudah tanggal hari ini',
            'tanggal_tugas.before_or_equal' => 'Tanggal tidak boleh sebelum tanggal hari ini',
        ]);
        // dd("ghh");

        // $cover_materi = $request->file('cover_materi');
        // $cover = Str::random(40) . '.' . $cover_materi->getClientOriginalExtension();
        // $request->cover_materi->storeAs('cover_materi', $cover, 'public');
        // Menangani unggahan file PDF
        $file_materi = $request->file('file_materi');
        $file_name = time() . '_' . $file_materi->getClientOriginalName();
        $file_materi->move(public_path('pdf_files'), $file_name);

        $materi = Materi::create([
            'mapel' => $request->mapel,
            'nama_materi' => $request->nama_materi,
            'file_materi' => $file_name,
            // 'cover_materi' => $cover,
            'kelas' => $request->kelas,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'tugas' => $request->tugas,
            'detail_tugas' => $request->detail_tugas,
            'tanggal_tugas' => $request->tanggal_tugas
        ]);

        return back()->with('success', 'Berhasil menambahkan materi dan tugas');
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
    public function update(Request $request, $materi)
    {
        $request->validate([
            'mapel' => 'required|max:100',
            'nama_materi' => 'required|max:100',
            'file_materi' => 'nullable|mimes:pdf',
            'kelas' => 'required|min:0|max:15',
            'harga' => 'required|min:0',
            'deskripsi' => 'required|max:225',
            'tugas' => 'required|max:225',
            'detail_tugas' => 'required|max:500',
            'tanggal_tugas' => 'required|after_or_equal:today|before_or_equal:today'
        ],[
            'nama_materi.required' => 'Wajib di isi',
            'nama_materi.max' => 'Nama Materi melebihi maximal',
            'mapel.required' => 'Wajib di isi',
            'mapel.max' => 'Nama mata pelajaran melebihi maximal',
            'kelas.required' => 'Wajib di isi',
            'kelas.min' => 'Kelas kurang dari 0',
            'kelas.max' => 'Kelas melebihi maximal',
            // 'file_materi.required' => 'Wajib di isi',
            'file_materi.mimes' => 'File harus berupa PDF',
            'harga.required' => 'Wajib di isi',
            'harga.min' => 'Harga kurang 0',
            'deskripsi.required' => 'Wajib di isi',
            'deskripsi.max' => 'Deskripsi melebihi maximal',
            'tugas.required' => 'Wajib di isi',
            'tugas.max' => 'Nama Tugas melebihi maximal',
            'detail_tugas.required' => 'Wajib di isi',
            'detail_tugas.max' => 'Detail Tugas melebihi maximal',
            'tanggal_tugas.required' => 'Wajib di isi',
            'tanggal_tugas.after_or_equal' => 'Tanggal tidak boleh sesudah tanggal hari ini',
            'tanggal_tugas.before_or_equal' => 'Tanggal tidak boleh sebelum tanggal hari ini',]);

        $materi = Materi::findOrFail($materi);

        // Jika file baru diunggah, hapus file lama dan simpan yang baru
        if ($request->hasFile('file_materi')) {
            // Menghapus file lama
            $oldFilePath = public_path('pdf_files') . '/' . $materi->file_materi;
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }

            // Menangani unggahan file PDF yang baru
            $file_materi = $request->file('file_materi');
            $file_name = time() . '_' . $file_materi->getClientOriginalName();
            $file_materi->move(public_path('pdf_files'), $file_name);

            $materi->update([
                'mapel' => $request->mapel,
                'nama_materi' => $request->nama_materi,
                'file_materi' => $file_name,
                'kelas' => $request->kelas,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'tugas' => $request->tugas,
                'detail_tugas' => $request->detail_tugas,
                'tanggal_tugas' => $request->tanggal_tugas,
            ]);

            return redirect()->route('materi.index')->with('success', 'Materi berhasil diupdate!');
        }

        // Jika tidak ada file baru diunggah, hanya update informasi lainnya
        $materi->update([
            'mapel' => $request->mapel,
            'nama_materi' => $request->nama_materi,
            'kelas' => $request->kelas,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'tugas' => $request->tugas,
            'detail_tugas' => $request->detail_tugas,
            'tanggal_tugas' => $request->tanggal_tugas,
        ]);

        return redirect()->route('materi.index')->with('success', 'Materi berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        // $materi = Materi::findOrFail($materi);

        // Hapus file terkait jika ada
        $filePath = public_path('pdf_files') . '/' . $materi->file_materi;
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Hapus record dari database
        $materi->delete();

        return redirect()->route('materi.index')->with('success', 'Materi berhasil dihapus!');
    }
}
