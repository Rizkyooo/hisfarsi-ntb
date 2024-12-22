<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Registration;
use Livewire\Component;

class RegisterEventForm extends Component
{

    public $events; // Daftar event yang akan ditampilkan
    public $selectedEvent = null; // ID event yang dipilih
    public $nama, $email, $no_hp, $keterangan;

    // Fungsi untuk mengambil daftar event
    public function mount()
    {
        $this->events = Event::all();
    }

    // Fungsi untuk memilih event
    public function selectEvent($eventId)
    {
        $this->selectedEvent = $eventId;
    }

    // Fungsi untuk menyimpan data pendaftaran
    public function register()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
        ]);

        // Simpan data pendaftaran
        Registration::create([
            'event_id' => $this->selectedEvent,
            'nama' => $this->nama,
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'keterangan' => $this->keterangan,
        ]);

        session()->flash('success', 'Pendaftaran berhasil!');

        // Reset input
        $this->reset();
    }
    public function render()
    {
        return view('livewire.register-event-form');
    }
}
