<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Materi;
use App\Models\Pengumpulan;
use App\Models\Tugas;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class TugasController extends Controller
{
    public function tugas()
    {
        $kumpulkan = Pengumpulan::all();
        $tugas = Tugas::all();
        return view('users.isimateri', compact('kumpulkan'));
    }


    public function createTugas(Request $request, $materi_id)
    {
        // dd($request);


        $request->validate([
            'file_tugas' => 'required|mimes:pdf',
            'tugas' => 'required|max:100',
            'detail_tugas' => 'required|max:500',
            'point' => 'min:0',
        ], [
            'file_tugas.required' => 'Wajib di isi',
            'file_tugas.mimes' => 'File harus berupa PDF',
            'tugas.required' => 'Wajib di isi',
            'tugas.max' => 'Nama Tugas melebihi maximal',
            'detail_tugas.required' => 'Wajib di isi',
            'detail_tugas.max' => 'Detail Tugas melebihi maximal',
            'point' => 'nilai point tidak boleh mines',
        ]);
            $file_tugas = $request->file('file_tugas');
            $file_name = time() . '_' . $file_tugas->getClientOriginalName();
            $file_tugas->move(public_path('storage/pdf'), $file_name);
            // $materi = Materi::where('materi_id', 'id')->first();
            if ($request->tingkat_kesulitan === 'rendah') {
                $point = 50;
            } elseif ($request->tingkat_kesulitan === 'sedang') {
                $point = 70;
            } elseif ($request->tingkat_kesulitan === 'tinggi') {
                $point = 100;
            }
            $tugas = Tugas::create([
                'materi_Id' => $materi_id,
                'tugas' => $request->tugas,
                'file_tugas' => $file_name,
                'point' => $point,
                'tingkat_kesulitan' => $request->tingkat_kesulitan,
                'detail_tugas' => $request->detail_tugas,
                'tanggal_tugas' => now()
            ]);
            // Mengatur nilai default poin berdasarkan tingkat kesulitan


            $tugas->save();

            return back()->with('success', 'Berhasil menambahkan tugas baru');
    }

    public function kirimTugas(Request $request)
    {
        $bukti = $request->file('bukti');
        $file_name = time() . '_' . $bukti->getClientOriginalName();
        $bukti->move(public_path('storage/bukti'), $file_name);

        $pengumpulan = Pengumpulan::create([
            'tugas_id' => $request->tugas_id,
            'guru_id' => $request->guru,
            'materi_id' => $request->materi_id,
            'user_id' => auth()->id(),
            'bukti' => $file_name,
        ]);
        return back()->with('success', 'berhasil mengirimkan tugas anda');
    }
}
