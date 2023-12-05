<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Guru extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id',
        'foto_profile',
        'tanggal_lahir',
        'pendidikan',
        'alamat',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function penarikansaldo(): HasMany
    {
        return $this->hasMany(penarikansaldo::class);
    }

}
