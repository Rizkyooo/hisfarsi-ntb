<?php

namespace App\Livewire;

use Livewire\Component;

class EventItem extends Component
{

    public $event;

    public function mount($event)
    {
        $this->event = $event;
    }

    public function redirectToEventDetail($eventId)
    {
        // Implement redirection logic here, for example:
        return redirect()->route('event.detail', ['id' => $eventId]);
    }

    public function render()
    {

        
        return view('livewire.event-item');
    }
}
