<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumpulan extends Model
{
    use HasFactory;
    protected $guarded =[

    ];
    public function Tugas(){
        return $this->belongsTo(Tugas::class,'tugas_id');
    }
    public function Materi(){
        return $this->belongsTo(Materi::class,'materi_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
