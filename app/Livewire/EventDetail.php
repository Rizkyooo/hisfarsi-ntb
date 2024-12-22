<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Registration;
use Livewire\Component;
use Illuminate\Support\Str;

class EventDetail extends Component
{

    public $event;
    public $nama_lengkap;
    public $email;
    public $no_hp;
    public $organisasi;
    public $isRegistered = false;

    public function mount($id)
    {
        // Fetch the event details by ID
        $this->event = Event::findOrFail($id);
    }

    public function register()
    {
        // Validate the form inputs
        $validatedData = $this->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
            'organisasi' => 'nullable|string|max:255',
        ]);

        // Create the registration entry
        Registration::create([
            'id' => Str::uuid(),
            'event_id' => $this->event->id,
            'nama_lengkap' => $this->nama_lengkap,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'organisasi' => $this->organisasi,
            'status_pendaftaran' => 'Pending',
        ]);

        // Set the registration flag to true
        $this->isRegistered = true;
    }
    public function render()
    {
        return view('livewire.event-detail');
    }
}
