<?php

namespace App\Livewire;

use App\Models\Kegiatan as ModelsKegiatan;
use Livewire\Component;
use Livewire\WithPagination;

class Kegiatan extends Component
{

    use WithPagination;

    public $search = '';

    // Tambahkan method ini untuk me-reset pagination saat search berubah
    public function updatingSearch()
    {
        $this->resetPage();
    }

    
    public function render()
    {

        $kegiatan = ModelsKegiatan::when($this->search, function ($query) {
            return $query->where('nama_event', 'like', '%' . $this->search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
        })->get();

        return view('livewire.kegiatan', compact('kegiatan'));
    }
}
