<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Authors extends Component
{
    public function render()
    {
        $users = User::whereHas('posts')->with('posts')->orderBy('name')->paginate(3);
        return view('livewire.post.authors');
    }
}
