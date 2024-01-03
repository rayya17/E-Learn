<?php

namespace App\Http\Controllers;

use file;
use App\Models\Guru;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\Order;
use App\Models\Materi;
use App\Models\Ulasan;
use App\Models\Notifikasi;
use App\Models\Pendapatan;
use App\Models\DetailMateri;
use App\Models\Komentar;
use App\Models\Tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input as InputInput;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $ulasan = Ulasan::all();
        $materiQuery = new Materi();
        $search = $request->input('search');
        $kategori = $request->kategori;


        if ($search) {
            $materiQuery = $materiQuery->where('mapel', 'like', "%$search%");
        }

        if ($kategori) {
            $materiQuery = $materiQuery->where('kelas', $kategori );
        }

        $materi = $materiQuery->get();
        // $detailmateri = detailmateri::where('materi_id')->get();
        $guru = Guru::with('user')->get();
        $order = Order::all();
        $ordertah = Order::whereIn('materi_id', $materi->pluck('id'))->get();
        return view('users.home',compact('guru', 'materi', 'ulasan' ,'order','ordertah', 'Notifikasi', 'unreadNotificationsCount'));
    }

    public function detailpemesanan()
    {
        return view('users.detailpemesanan');
    }
    public function kumpultugas($id)
    {
        $tugas = Tugas::all();
        $materi = Materi::findOrFail($id);
        $detailTugas = Tugas::findOrFail($id);
        $detailMateri = $detailTugas->materi;
        $komentar = Komentar::all();
        $guru = Guru::with('user')->get();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();

        return view('users.kumpultugas',compact('materi','detailTugas','tugas', 'guru', 'Notifikasi', 'unreadNotificationsCount','detailMateri','komentar'));
    }
    public function detailtugas($id)
    {
        $guru = Guru::with('user')->get();
        $tugas = Tugas::all();
        $materi = Materi::findOrFail($id);
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        return view('users.detailtugas',compact('materi', 'Notifikasi','guru', 'unreadNotificationsCount','tugas'));
    }

    public function detailpesan()
    {

        return view('users.detailpesan');
    }

    public function isimateri($id)
    {
        $materi = Materi::findOrFail($id);
        $guru = Guru::with('user')->get();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        return view('users.isimateri',compact('Notifikasi', 'unreadNotificationsCount','materi','guru'));
    }

    public function payment(Order $order)
    {
        $orderview = [
            'nama_materi' => $order->materi->nama_materi,
            'harga' => $order->materi->harga
        ];
        \Midtrans\Config::$serverKey = 'SB-Mid-server-eZohNqpt-MMEqeZMt_NYH896';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'name' => $order->user->name,
                'phone' => $order->user->no_telepon,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // Pass $order and $snapToken to the view
        return view('users.detailpesan', compact('order', 'snapToken', 'orderview'));
    }

    public function checkout(Materi $materi)
    {
        $existingOrder = Order::where('user_id', auth()->id())->where('materi_id', $materi->id)->first();
        if ($existingOrder) {
            if ($existingOrder->status = 'unpaid') {
                return redirect()->route('payment', $existingOrder->id)->with('success', 'Anda sudah memesan sebelum nya, mohon lanjutkan pembayaran');
            }
            if ($existingOrder->status = 'paid') {
                return back()->with('success', 'Anda sudah membeli materi ini sebelum nya');
            }
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'materi_id' => $materi->id,
            'status' => 'unpaid',
            'total_price' => $materi->harga,
        ]);

        $guru = User::where('role', 'guru')->first();
        Notifikasi::create([
            'sender_id' => Auth::user()->id,
            'user_id' => $guru->id,
            'title' => Auth::user()->name,
            'message' => Auth::user()->name . " Telah membeli kelas " .$materi->materi,
            'materi_id' => $materi->id,
        ]);

        return redirect()->route('payment', $order->id)->with('success', 'berhasil menambahkan');
    }

    public function callback(Request $request)
    {
        if ($request->status_code == 200 || $request->status_code == 201) {
            // Cari pesanan berdasarkan ID
            $order = Order::where('id', $request->order_id)->first();
            $admin = User::where('role', 'admin')->first();
            // Periksa apakah pesanan ada
            if ($order) {
                // Perbarui status pesanan menjadi 'Paid'
                $order->status = 'Paid';
                $order->save();

                Pendapatan::create([
                    'user_id' => $order->Materi->guru->user_id,
                    'order_id' => $order->id,
                    'pendapatan' => $order->total_price * 0.9,
                ]);

                Pendapatan::create([
                    'user_id' => $admin->id,
                    'order_id' => $order->id,
                    'pendapatan' => $order->total_price * 0.1,
                ]);
            }


            // Redirect ke halaman utama dengan pesan sukses
            return redirect()->route('HomePage')->with('success', 'Transaksi berhasil diproses!');
        } else {
            // Redirect ke rute detailpesan dengan pesan kesalahan
            return redirect()->route('detailpesan')->with('error', 'Transaksi gagal');
        }
    }

    public function detailmateri_user($id){
        $ulasan = Ulasan::with('user')->where('materi_id', $id)->get();
        $guru = Guru::with('user')->get();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $materi = Materi::findOrFail($id);
        return view('users.detailmateri_user', compact('materi', 'Notifikasi', 'unreadNotificationsCount', 'ulasan', 'guru'));
    }
    public function searchMateri(Request $request)
    {
        $search = $request->input('search');
        $materi = Materi::where('mapel', 'like', '%' . $search . '%')->get();
        $Notifikasi = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->orderBy('created_at', 'desc')->get();
        $unreadNotificationsCount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])->where('markRead', false)->count();
        $guru = Guru::with('user')->get();
        return view('users.home', compact('Notifikasi', 'unreadNotificationsCount','materi','guru'));
    }

}
