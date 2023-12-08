<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Order;
use App\Models\Materi;
use App\Models\Pendapatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function home()
    {
        $materi = Materi::all();
        $guru = Guru::with('user')->get();
        return view('users.home', compact('materi', 'guru'));
    }

    public function detailpemesanan()
    {
        return view('users.detailpemesanan');
    }

    public function detailpesan()
    {

        return view('users.detailpesan');
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
}
