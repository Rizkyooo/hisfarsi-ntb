<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Stephenjude\FilamentBlog\Models\Post;

class Artikel extends Component
{

    use WithPagination;

    public $search = '';

    // Tambahkan method ini untuk me-reset pagination saat search berubah
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::published()->when($this->search, function ($query) {
            return $query->where('title', 'like', '%' . $this->search . '%');
        })->get();

        return view('livewire.artikel', compact('posts'));
    }
}
