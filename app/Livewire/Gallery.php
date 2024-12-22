<?php

namespace App\Livewire;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;

class Gallery extends Component
{

    public $gallery;
    public $currentIndex = 0;  // Store the current image index
    public $myModal1 = false;  // To control the modal visibility

    public function mount()
    {
        $this->gallery = ModelsGallery::all();
    }

    // Open modal with the specific image
    public function openModal($index)
    {
        $this->currentIndex = $index;
        $this->myModal1 = true;
    }

    // Close the modal
    public function closeModal()
    {
        $this->myModal1 = false;
    }

    // Navigate to the next image
    public function nextImage()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->gallery);
    }

    // Navigate to the previous image
    public function prevImage()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->gallery)) % count($this->gallery);
    }
    
    public function render()
    {
        return view('livewire.gallery');
    }
}
