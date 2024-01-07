<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    protected $keyType = 'string'; // Tipe data kunci primer
    public $incrementing = false; // Tetapkan ke false untuk menginformasikan bahwa kolom 'id' bukan auto-incrementing
    protected $primaryKey = 'id'; // Nama kolom kunci primer

    use HasFactory;
    protected $quarded = [

    ];
    protected $fillable = [
        'user_id',
        'materi_id',
        'total_price'
    ];
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid()->toString(); // Atur nilai UUID saat membuat model baru
        });
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function Materi(): BelongsTo{
        return $this->belongsTo(Materi::class,'materi_id','id');
    }
}
