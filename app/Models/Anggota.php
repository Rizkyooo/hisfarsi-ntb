<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anggota extends Model
{
    protected $fillable = [
        'name',
        'jabatan',
        'photo'
    ];

    public function pengurus()
    {
        return $this->belongsToMany(Pengurus::class, 'pengurus_anggota', 'anggota_id', 'pengurus_id');
    }
}
