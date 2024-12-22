<?php

namespace App\Livewire;

use App\Models\Kegiatan;
use Livewire\Component;

class LatestKegiatan extends Component
{
    public function render()
    {
        $kegiatan = Kegiatan::all();
        return view('livewire.latest-kegiatan',  compact('kegiatan'));
    }
}
