<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    // use HasUuids;

    protected $casts = [
        'dokumentasi' => 'array', // Laravel akan otomatis mengonversi ke JSON saat menyimpan
    ];

    protected $fillable = [
        'judul', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai', 
        'alamat', 'media', 'dokumentasi'
    ];

    
    

    
}
