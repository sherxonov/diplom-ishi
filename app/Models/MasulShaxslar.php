<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasulShaxslar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "masul_shaxslars";

    protected $fillable = [
        'shaxs_ismi',
        'shaxs_familya',
        'shaxs_sharif',
        'mansab_id'
    ];


    public function mansab()
    {
        return $this->belongsTo(Mansablar::class);
    }
}
