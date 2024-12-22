<?php

namespace App\Livewire;

use App\Models\Event as ModelsEvent;
use Livewire\Component;
use Livewire\WithPagination;

class Event extends Component
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
        $latestEvents = ModelsEvent::when($this->search, function ($query) {
            return $query->where('nama_event', 'like', '%' . $this->search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
        })
        ->where('status', 'Aktif') // Hanya event yang sedang berlangsung
        ->get();

        $pastEvents = ModelsEvent::when($this->search, function ($query) {
            return $query->where('nama_event', 'like', '%' . $this->search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $this->search . '%');
        })
        ->where('status', 'Selesai') // Hanya event yang sudah selesai
        ->get();

        return view('livewire.event', compact('latestEvents', 'pastEvents'));
    }
}