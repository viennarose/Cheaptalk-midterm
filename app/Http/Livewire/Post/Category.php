<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Category extends Component
{

    public function render()
    {
        $categories = Category::get()->sortBy('category');
        return view('livewire.post.category', compact('categories'));
    }
}
