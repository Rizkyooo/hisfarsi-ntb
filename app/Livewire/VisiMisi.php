<?php

namespace App\Livewire;

use App\Models\VisiMisi as ModelsVisiMisi;
use Livewire\Component;

class VisiMisi extends Component
{
    public function render()
    {
        $visimisi = ModelsVisiMisi::first();
        return view('livewire.visi-misi', compact('visimisi'));
    }
}
