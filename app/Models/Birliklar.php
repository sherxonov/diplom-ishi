<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Birliklar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "birliklars";

    protected $fillable = [
        'birlik_nomi'
    ];

}
