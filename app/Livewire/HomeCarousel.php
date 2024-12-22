<?php

namespace App\Livewire;

use App\Models\Banner;
use Livewire\Component;

class HomeCarousel extends Component
{

    public $slides;

    public function mount()
    {
        // Fetch banners from the database and convert to array
        $this->slides = Banner::all()->map(function($banner) {
            return [
                'image' => asset('storage/' . $banner->foto), // Assuming 'foto' is the image path
            ];
        })->toArray();  // Convert collection to array
    }

    public function render()
    {
        return view('livewire.home-carousel');
    }
}
