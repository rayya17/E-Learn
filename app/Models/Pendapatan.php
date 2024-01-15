<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pendapatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function penarikanSaldos()
    {
        return $this->hasMany(PenarikanSaldo::class, 'pendapatan_id');
    }

    public function Order():BelongsTo
    {
        return $this->belongsTo(Order::class,'order_id');
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function history()
    {
        return $this->hasMany(history::class,'histori_id');
    }
}
