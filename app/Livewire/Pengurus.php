<?php

namespace App\Livewire;

use App\Models\Pengurus as ModelsPengurus;
use Livewire\Component;

class Pengurus extends Component
{

    public $myModal1 = false;
    public $selectedAnggota = null; // Store the selected anggota ID
    public $anggotaIds = []; // Store the list of anggota IDs
    public $currentIndex = 0; // Track the current member index

    // Handle selecting a member to display their details
    public function selectAnggota($id)
    {
        $this->selectedAnggota = $id;
        $this->anggotaIds = ModelsPengurus::pluck('id')->toArray(); // Get all anggota IDs
        $this->currentIndex = array_search($id, $this->anggotaIds); // Set the initial index
        $this->myModal1 = true; // Open the modal
    }

    // Show the next anggota
    public function nextAnggota()
    {
        $nextIndex = $this->currentIndex + 1;
        if ($nextIndex < count($this->anggotaIds)) {
            $this->selectedAnggota = $this->anggotaIds[$nextIndex];
            $this->currentIndex = $nextIndex;
        }
    }

    // Show the previous anggota
    public function previousAnggota()
    {
        $prevIndex = $this->currentIndex - 1;
        if ($prevIndex >= 0) {
            $this->selectedAnggota = $this->anggotaIds[$prevIndex];
            $this->currentIndex = $prevIndex;
        }
    }

    // Close the modal
    public function closeModal()
    {
        $this->myModal1 = false;
        $this->selectedAnggota = null;
    }
    public function render()
    {
        $penguruses = ModelsPengurus::with('anggota')->get();
        return view('livewire.pengurus', compact('penguruses'));
    }
}
