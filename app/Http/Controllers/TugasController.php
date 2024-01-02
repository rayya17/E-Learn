<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Guru;
use App\Models\Materi;
use App\Models\Pengumpulan;
use App\Models\Tugas;
use App\Models\User;
use App\Models\Order;
use App\Models\Notifikasi;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class TugasController extends Controller
{
    public function tugas()
    {
        $user = Auth::id();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $kumpulkan = Pengumpulan::all();
        $tugas = Tugas::all();
        return view('users.isimateri', compact('kumpulkan', 'Notifikasi', 'unreadNotificationsCount', 'user'));
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

            $order = Order::where('materi_id', $materi_id)->get();
            foreach ($order as $key => $value) {
                # code...


            Notifikasi::create([
                'sender_id' => Auth::user()->id,
                'user_id' => $value->user_id,
                'title' => Auth::user()->name,
                'message' => Auth::user()->name . " menambahkan tugas baru" ,
            ]);
        }

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
            'user_id' => Auth::user()->id,
            'bukti' => $file_name,
        ]);

        // $guru = User::where('role', 'guru')->first();

            Notifikasi::create([
                'sender_id' => Auth::user()->id,
                'user_id' => $request->guru,
                'title' => Auth::user()->name,
                'message' => Auth::user()->name . " mengumpulkan tugas" ,
            ]);
        return back()->with('success', 'berhasil mengirimkan tugas anda');
    }

    public function editTugas($tugas_id)
    {
        $tugas = Tugas::findOrFail($tugas_id);
        // Tambahkan logika untuk menampilkan form edit tugas, jika diperlukan
        return view('edit_tugas', compact('tugas'));
    }

    public function updateTugas(Request $request, $tugas_id)
    {
        $request->validate([
            'file_tugas' => 'nullable|mimes:pdf',
            'tugas' => 'required|max:100',
            'detail_tugas' => 'required|max:500',
            'point' => 'min:0',
        ], [
            'file_tugas.mimes' => 'File harus berupa PDF',
            'tugas.required' => 'Wajib di isi',
            'tugas.max' => 'Nama Tugas melebihi maximal',
            'detail_tugas.required' => 'Wajib di isi',
            'detail_tugas.max' => 'Detail Tugas melebihi maximal',
            'point.min' => 'Nilai point tidak boleh kurang dari 0',
        ]);

        $tugas = Tugas::findOrFail($tugas_id);

        // Handle file upload jika ada
        if ($request->hasFile('file_tugas')) {
            $file_tugas = $request->file('file_tugas');
            $file_name = time() . '_' . $file_tugas->getClientOriginalName();
            $file_tugas->move(public_path('storage/pdf'), $file_name);
            $tugas->file_tugas = $file_name;
        }

        // Update nilai point berdasarkan tingkat kesulitan
        if ($request->tingkat_kesulitan === 'rendah') {
            $point = 50;
        } elseif ($request->tingkat_kesulitan === 'sedang') {
            $point = 70;
        } elseif ($request->tingkat_kesulitan === 'tinggi') {
            $point = 100;
        } else {
            $point = $request->point;
        }

        $tugas->update([
            'tugas' => $request->tugas,
            'point' => $point,
            'tingkat_kesulitan' => $request->tingkat_kesulitan,
            'detail_tugas' => $request->detail_tugas,
        ]);

        return back()->with('success', 'Berhasil mengupdate tugas');
    }

    public function deleteTugas($id)
    {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();

        // Tambahkan logika jika diperlukan, misalnya memberikan notifikasi

        return back()->with('success', 'Berhasil menghapus tugas');
    }

}
