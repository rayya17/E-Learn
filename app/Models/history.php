<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pendapatan()
    {
        return $this->belongsTo(Pendapatan::class, 'pendapatan_id');
    }
}
