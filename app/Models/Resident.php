<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jenis_tamu',
        'asal_desa',
        'asal_instansi',
        'address',
        'keperluan',
        'no_hp',
        'tgl_kjgn',
        'jam_kjgn',
        'status',
        'petugas',
        'catatan',
    ];
}
