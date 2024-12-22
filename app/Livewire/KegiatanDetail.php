<?php

namespace App\Livewire;

use App\Models\Kegiatan;
use Livewire\Component;

class KegiatanDetail extends Component
{

    public $kegiatan;
    public $selectedImageIndex = 0; // Track the selected image index
    public $myModal1 = false; // Control the visibility of the modal

    public function mount($id)
    {
        // Fetch the event details by ID
        $this->kegiatan = Kegiatan::findOrFail($id);
    }

    public function openModal($index)
    {
        // Set the selected image and open the modal
        $this->selectedImageIndex = $index;
        $this->myModal1 = true;
    }

    public function closeModal()
    {
        // Close the modal
        $this->myModal1 = false;
    }

    public function nextImage()
    {
        // Increment the index to go to the next image
        if ($this->selectedImageIndex < count($this->kegiatan->dokumentasi) - 1) {
            $this->selectedImageIndex++;
        }
    }

    public function prevImage()
    {
        // Decrement the index to go to the previous image
        if ($this->selectedImageIndex > 0) {
            $this->selectedImageIndex--;
        }
    }
    public function render()
    {
        return view('livewire.kegiatan-detail');
    }
}
