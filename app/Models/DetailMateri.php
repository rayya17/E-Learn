<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailMateri extends Model
{
    use HasFactory;
    protected $guarded = [ ];

    public function materi()
    {
        return $this->belongsTo(Materi::class, 'materi_id');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
