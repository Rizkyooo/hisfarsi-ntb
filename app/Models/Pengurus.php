<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengurus extends Model
{
    protected $fillable = ['nama_bidang'];

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class, 'pengurus_anggota', 'pengurus_id', 'anggota_id');
    }
}
