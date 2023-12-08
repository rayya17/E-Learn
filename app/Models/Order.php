<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $quarded = [

    ];
    protected $fillable = [
        'user_id',
        'materi_id',
        'total_price'
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function Materi(): BelongsTo{
        return $this->belongsTo(Materi::class,'materi_id','id');
    }
}
