<?php

namespace App\Livewire;

use Livewire\Component;
use Stephenjude\FilamentBlog\Models\Post;

class ArtikelDetail extends Component
{

    public $post;

    public function mount($id)
    {
        // Fetch the event details by ID
        $this->post = Post::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.artikel-detail');
    }
}
