<?php
namespace App\Livewire;

use Livewire\Component;

class ArtikelItem extends Component
{
    public $post;

    public function mount($post) 
    {
        $this->post = $post;
    }

    public function redirectToArtikelDetail()
    {
        return redirect()->route('artikel.detail', ['id' => $this->post->id]);
    }

    public function render()
    {
        return view('livewire.artikel-item');
    }
}