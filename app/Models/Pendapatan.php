<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendapatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function penarikanSaldos()
    {
        return $this->hasMany(PenarikanSaldo::class, 'pendapatan_id');
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
