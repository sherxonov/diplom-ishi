<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buyumlar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "buyumlars";

    protected $fillable = [
        'buyum_nomi',
        'yangi_soni',
        'eski_soni',
        'birlik_id',
    ];

    public function birlik()
    {
        return $this->belongsTo(Birliklar::class);
    }
}
