<?php

namespace App\Livewire;

use Livewire\Component;

class KegiatanItem extends Component
{

    public $kegiatan;

    public function mount($kegiatan)
    {
        $this->kegiatan = $kegiatan;
    }

    public function redirectToKegiatanDetail($kegiatanId)
    {
        // Implement redirection logic here, for example:
        return redirect()->route('kegiatan.detail', ['id' => $kegiatanId]);
    }
    public function render()
    {
        return view('livewire.kegiatan-item');
    }
}
