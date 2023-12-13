<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class penarikansaldo extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'guru_id',
        'user_id',
        'pendapatan_id',
        // 'order_id',
        'metodepembayaran',
        'keterangan_pengajuan',
        'tujuan_pengajuan',
    ];

    // public function guru()
    // {
    //     return $this->belongsTo(Guru::class, 'guru_id');
    // }

    public function pendapatan()
    {
        return $this->belongsTo(Pendapatan::class, 'pendapatan_id');
    }

    public function notifikasi()
    {
        return $this->hasMany(Notifikasi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
