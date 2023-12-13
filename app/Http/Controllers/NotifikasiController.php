<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    public function markRead($id)
    {
        // dd($id);
        $notification = Notifikasi::findOrFail($id);

        if ($notification->user_id == Auth::id() && !$notification->markRead) {
            $notification->markRead = true;
            $notification->save();
        }

        $unreadNotificationcount = Notifikasi::where('user_id', Auth::user()->id)->whereNotIn('title', [Auth::user()->name])
            ->where('markRead', false)
            ->count();

        $notification->delete();

        // Sertakan jumlah notifikasi yang belum dibaca dalam respons JSON
        return response()->json(['success' => true, 'unreadNotificationcount' => $unreadNotificationcount]);
        // return back();
    }
}
