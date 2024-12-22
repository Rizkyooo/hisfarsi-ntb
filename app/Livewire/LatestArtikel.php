<?php
namespace App\Livewire;

use Livewire\Component;
use Stephenjude\FilamentBlog\Models\Post;

class LatestArtikel extends Component
{
    public function render()
    {
        $posts = Post::published()->get();
        return view('livewire.latest-artikel', ['posts' => $posts]); 
    }
}