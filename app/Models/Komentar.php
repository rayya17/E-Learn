<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $guarded =[

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function film(){
        return $this->belongsTo(Materi::class,'materi_id');
    }
    public function reply(int $id,int $materi){
        return Komentar::where('materi_id',$materi)->where('parent_id',$id)->get();
    }
}
