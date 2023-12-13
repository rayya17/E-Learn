<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materi_id');
    }

    public function ulasan()
    {
        return $this->belongsTo(Ulasan::class, 'ulasan_id');
    }

    public function penarikansaldo()
    {
        return $this->belongsTo(penarikansaldo::class, 'penarikan_id');
    }
}
