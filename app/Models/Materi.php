<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Materi extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function detailmateri()
    {
        return $this->hasMany(DetailMateri::class, 'materi_id');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'ulasan_id');
    }

    public function notifikasi()
    {
        return $this->hasMany(Notifikasi::class);
    }

    public function Kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id');
    }

    public function penarikansaldos()
    {
        return $this->hasMany(PenarikanSaldo::class, 'pendapatan_id');
    }

}

