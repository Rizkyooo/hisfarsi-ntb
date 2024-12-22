<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasUuids;

    protected $fillable = [
        'nama_event', 'deskripsi', 'tanggal_mulai', 'tanggal_selesai', 
        'lokasi', 'jenis_event', 'kuota_peserta', 'status','banner'
    ];
}
