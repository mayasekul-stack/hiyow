<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model

{   
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'waktu',
        'lokasi',
        'penanggung_jawab',
        'waktu',
        'status',
        'keterangan'
    ];
}
