<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Create extends Component
{
    public $user_id, $category_id, $post;

    protected function rules()
    {
        return [
            'category_id' => 'required',
            'post' => 'required|string|max:255'
        ];
    }
    public function CreatePost(){
        $this->validate([
            'category_id' => 'required|integer',
            'post' => 'required|string|max:255',
        ]);
        $post = Post::create([
            'category_id' => $this->category_id,
            'post' => $this->post,
        ]);
        return redirect('/home')->with('message', 'Created Successfully');
    }

    public function render()
    {
        $this->post = Post::all();
        return view('livewire.posts.create', ['categories'=> Category::all()]);
    }
}
