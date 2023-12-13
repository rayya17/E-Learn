<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function penarikanSaldos()
    {
        return $this->hasMany(PenarikanSaldo::class, 'pendapatan_id');
    }
}
