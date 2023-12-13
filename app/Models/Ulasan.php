<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ulasan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class,'user_id');
    }

    public function materi(): BelongsTo{
        return $this->belongsTo(Materi::class,'materi_id');
    }

    public function guru(): BelongsTo{
        return $this->belongsTo(Guru::class,'materi_id');
    }
}
