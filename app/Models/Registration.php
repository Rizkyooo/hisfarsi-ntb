<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasUuids;

    
    
    protected $fillable = [
        'event_id', 'nama_lengkap', 'email', 'no_hp', 'organisasi', 'status_pendaftaran'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
