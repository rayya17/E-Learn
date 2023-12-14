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
        $tugas = Tugas::all();
        return view('users.isimateri');
    }


    public function createTugas(Request $request,$materi_id)
    {
        $request->validate([
            'file_tugas' => 'required|mimes:pdf',
            'tugas' => 'required|max:100',
            'detail_tugas' => 'required|max:500',
        ], [
            'file_tugas.required' => 'Wajib di isi',
            'file_tugas.mimes' => 'File harus berupa PDF',
            'tugas.required' => 'Wajib di isi',
            'tugas.max' => 'Nama Tugas melebihi maximal',
            'detail_tugas.required' => 'Wajib di isi',
            'detail_tugas.max' => 'Detail Tugas melebihi maximal',
        ]);
        try {
            $file_tugas = $request->file('file_tugas');
            $file_name = time() . '_' . $file_tugas->getClientOriginalName();
            $file_tugas->move(public_path('storage/pdf'), $file_name);
            // $materi = Materi::where('materi_id', 'id')->first();

            $tugas = Tugas::create([
                'materi_Id' => $materi_id,
                'tugas' => $request->tugas,
                'file_tugas' => $file_name,
                'detail_tugas' => $request->detail_tugas
            ]);

            return back()->with('success', 'Berhasil menambahkan tugas baru');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal Menambahkan tugas baru');
        }
    }

    public function kirimTugas(Request $request){
        dd($request);
        $bukti = $request->file('bukti');
        $file_name = time() . '_' . $bukti->getClientOriginalName();
        $bukti->move(public_path('storage/bukti'), $file_name);
        $tugas = Tugas::where('tugas_id','id')->first();
        $guru = Guru::where('user_id', 'id')->first();
        dd($guru);
        $pengumpulan = Pengumpulan::create([
            'tugas_id' => $tugas,
            'guru_id' => $guru,
            'bukti' => $file_name,
            'point' => $request->point,
        ]);
    }
}
