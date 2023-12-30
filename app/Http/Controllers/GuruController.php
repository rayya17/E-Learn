<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Notifikasi;
use App\Models\penarikansaldo;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use App\Models\Materi;
use App\Models\DetailMateri;
use App\Models\Order;
use App\Models\Tugas;
use App\Models\Pendapatan;
use App\Models\Pengumpulan;
use App\Models\User;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function Dashboardguru()
    {
        // $user = Auth::id();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        // $jumlahmateri = materi::where('guru_id', $guru)->count();
        $jumlahmateri = materi::count();
        $guru = Guru::with('user')->get();
        $pendapatanguru = Pendapatan::all()->where('user_id', auth()->id());
        $pendapatan = $pendapatanguru->pluck('pendapatan')->sum();
        $jumlahtransaksi = $pendapatanguru->count();
        // dd($jumlahmateri);
        $data = Pendapatan::select(
            DB::raw('MONTH(created_at)as month'),
            DB::raw('YEAR(created_at)as year'),
            DB::raw('SUM(pendapatan)as total'),

        )
            ->whereIn('user_id', [Auth()->user()->id])
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('year', 'month', 'pendapatan')->get();

            $processeddata = [];

            $currentYear = Carbon::now()->year;
            $currentMonth = Carbon::now()->month;

            for ($month = 1; $month <= 12; $month++) {
                $date = Carbon::createFromDate($currentYear, $month, 1);
                $yearMonth = $date->isoFormat('MMMM');

            $color = ($currentYear == $currentYear && $month == $currentMonth) ? 'blue' : 'green';

            $processeddata[$yearMonth]= [
                'month' => $yearMonth,
                Auth()->user()->id => 0,
                'color' => $color,
            ];
        }

            foreach($data as $item){
                $yearMonth = Carbon::createFromDate($item->year, $item->month, 1)->isoFormat('MMMM');

                if (isset($processeddata[$yearMonth])) {
                    $jumlah = $pendapatan;
                    $processeddata[$yearMonth][Auth()->user()->id] = $jumlah;
                }
            }

            $chartData = array_values($processeddata);

        return view('guru.dashboardguru', compact('guru', 'jumlahmateri', 'pendapatan', 'jumlahtransaksi', 'chartData', 'Notifikasi', 'unreadNotificationsCount'));
    }

    public function materi()
    {
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();

        $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        // $guru = Guru::with('user')->get();
        return view('guru.materi', compact('guru', 'Notifikasi', 'unreadNotificationsCount'));
    }
    /**
     * Display a listing of the resource.
     */

    public function Pengumpulantugas(Request $request)
    {
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        $tugas_dikumpulkan = Pengumpulan::all();
        // $pengumpulan = Pengumpulan::all();
        return view('guru.pengumpulan', compact('guru', 'Notifikasi', 'unreadNotificationsCount','tugas_dikumpulkan'));
    }

    public function index(){
        $mengajukan = penarikansaldo::all();
        $saldo = pendapatan::all();
        $pendapatanguru = Pendapatan::all()->where('user_id', auth()->id());
        $pendapatan = $pendapatanguru->pluck('pendapatan')->sum();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();

        return view('guru.pengajuansaldo', compact('mengajukan', 'saldo', 'pendapatan','Notifikasi', 'unreadNotificationsCount'));
    }

    public function create(){
        $mengajukan = penarikansaldo::all();
        return view('guru.pengajuansaldo', compact('mengajukan'));
    }

    public function store(Request $request){
        $request->validate([
            'metodepembayaran' => 'required',
            'tujuan_pengajuan' => 'required',
            'keterangan_pengajuan' => 'required|unique:penarikansaldos|min:5|max:20|numeric|regex:/^\d*$/',
        ], [
            'metodepembayaran.required'=> 'harus diisi',
            'tujuan_pengajuan.required'=> 'harus diisi',
            'keterangan_pengajuan.required'=> 'harus diisi',
            'keterangan_pengajuan.unique'=>'nomor rekening tidak boleh sama',
            'keterangan_pengajuan.min'=> 'minimal 5',
            'keterangan_pengajuan.max'=> 'maksimal 20',
            'keterangan_pengajuan.numeric'=> 'keterangan harus berupa angka',
            'keterangan_pengajuan.regex'=> 'keterangan tidak sesuai dengan format',


        ]);

        $pendapatan = Pendapatan::findOrFail(Auth::user()->id);

        $mengajukan = new Penarikansaldo;
        // $mengajukan->guru_id = $request->guru_id;
        $mengajukan->user_id = Auth::user()->id;
        $mengajukan->pendapatan_id = $pendapatan->id;
        $mengajukan->metodepembayaran = $request->metodepembayaran;
        $mengajukan->keterangan_pengajuan = $request->keterangan_pengajuan;
        $mengajukan->tujuan_pengajuan = $request->tujuan_pengajuan;
        $mengajukan->status = 'mengajukan';

        $mengajukan->save();
        return back()->with('success', 'berhasil menambahkan data');
    }

    public function update(Request $request, $id){

        $penarikansaldo = Penarikansaldo::find($id);

        $request->validate([
            'metodepembayaran' => 'required',
            'tujuan_pengajuan' => 'required',
            'keterangan_pengajuan' => 'required|unique:penarikansaldos|min:5|max:20|numeric|regex:/^\d*$/',
        ], [
            'metodepembayaran.required'=> 'harus diisi',
            'tujuan_pengajuan.required'=> 'harus diisi',
            'keterangan_pengajuan.required'=> 'harus diisi',
            'keterangan_pengajuan.unique'=>'nomor rekening tidak boleh sama',
            'keterangan_pengajuan.min'=> 'minimal 5',
            'keterangan_pengajuan.max'=> 'maksimal 20',
            'keterangan_pengajuan.numeric'=> 'keterangan harus berupa angka',
            'keterangan_pengajuan.regex'=> 'keterangan tidak sesuai dengan format',


        ]);

        $penarikansaldo->metodepembayaran = $request->metodepembayaran;
        $penarikansaldo->keterangan_pengajuan = $request->keterangan_pengajuan;
        $penarikansaldo->tujuan_pengajuan = $request->tujuan_pengajuan;

        $penarikansaldo->save();

        return back()->with('success', 'Data berhasil diubah');
    }

    public function destroy($id){

        $penarikansaldo = Penarikansaldo::find($id);

        if (!$penarikansaldo) {
            return back()->with('error', 'Pengajuan tidak ditemukan');
        }

        $penarikansaldo->delete();

        return redirect()->route('Pembayaran.index')->with('success', 'Data berhasil dihapus');
    }



        public function mengajukandana(Request $request, $id)
    {
        // Temukan data berdasarkan ID
        $penarikansaldo = Penarikansaldo::findOrFail($id);
        // dd($request->all());
        // Pemeriksaan apakah saldo guru mencukupi
        $pendapatan = Pendapatan::where('user_id',auth()->user()->id)->first();

        if ($pendapatan && $pendapatan->pendapatan <= 0) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak mempunyai saldo yang cukup'
            ]);

        }else{
             // Ubah status menjadi "Telah diajukan"
            $penarikansaldo->status = 'telah diajukan';
            $penarikansaldo->save();

            return response()->json([
                'success' => true,
                'message' => 'Penarikan berhasil'
            ]);
        }
    }



    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('loginPage')->with('success', 'berhasil logout');
    }


    public function materidetail($id)
    {
        $guru = Guru::where('user_id', auth()->user()->id)->firstOrFail();
        $materi = Materi::findOrFail($id);
        $tugas = Tugas::where('materi_id', $materi->id)->get();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();

      return view('guru.materidetail', compact('Notifikasi', 'unreadNotificationsCount', 'materi', 'guru', 'tugas'));
    }

//     public function Penarikansaldo(Request $request)
//     {
//         $guruId = Auth::id();

//         $request->validate([
//             'metodepembayaran' => 'required',
//             'keterangan_pengajuan' => 'required',
//             'tujuan_pengajuan' => 'required',
//         ]);

//         $mengajukan = new Penarikansaldo;
//     $mengajukan->metodepembayaran = $request->metodepembayaran;
//     $mengajukan->keterangan_pengajuan = $request->keterangan_pengajuan;
//     $mengajukan->tujuan_pengajuan = $request->tujuan_pengajuan;
//     $mengajukan->status = 'mengajukan';

//     $mengajukan->save();
//     $mengajukan = Penarikansaldo::all();

//     return view('guru.pengajuansaldo', compact('guruId', 'mengajukan'));
}
