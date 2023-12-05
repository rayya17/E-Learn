<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class penarikansaldo extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'metodepembayaran',
        'keterangan_pengajuan',
        'tujuan_pengajuan',
    ];

    public function guru(): BelongsTo
    {
        return $this->belongsTo(guru::class,'guru_id');
    }


}
