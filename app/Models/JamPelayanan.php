<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JamPelayanan extends Model
{
    protected $table = 'jam_pelayanans';

    protected $fillable = [
        'hari',
        'jam_buka',
        'jam_tutup'
    ];
}
