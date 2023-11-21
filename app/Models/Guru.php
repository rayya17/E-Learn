<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Guru extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id',
        'foto_profile',
        'notelp',
        'tanggal_lahir',
        'pendidikan',
        'alamat',
        'foto_sertifikat',
        'foto_ktp',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
