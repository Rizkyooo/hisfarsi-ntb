<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class LatestEvent extends Component
{
   public function render()
    {
        $events = Event::all()->where('status', 'Aktif');
        return view('livewire.latest-event', compact('events'));
    }
}
