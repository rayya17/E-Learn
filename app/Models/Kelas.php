<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded =[

    ];

    public function materi(){
        return $this->hasMany(Guru::class,'materi_id');
    }
}
