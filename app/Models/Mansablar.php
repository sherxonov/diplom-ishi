<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mansablar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "mansablars";

    protected $fillable = [
        'mansab_nomi',
    ];
}
