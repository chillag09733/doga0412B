<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tevekenyseg extends Model
{
    /** @use HasFactory<\Database\Factories\TevekenysegFactory> */
    use HasFactory;

    protected $fillable = [
        'kat_id',
        'tev_nev',
        'allapot'
    ];
}
