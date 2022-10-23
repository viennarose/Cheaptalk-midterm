<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function all(Request $request)
    {
        $posts = Post::where([
            ['created_at', '!=', null],
            [function($query) use ($request){
                if(($post = $request->post)){
                    $query->orWhere('post', 'LIKE', '%'. $post . '%')
                    ->get();
                }
            }]
        ])
        ->orderBy("created_at","desc")
        ->paginate(6);
           return view('pages.home',compact('posts'),['posts'=>$posts])
           ->with('i',(request()->input('page',1)-1)*5);
    }

    public function byCategory(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(3);
        return view('pages.category', compact('posts', 'category'));
    }

    public function byAuthor(User $author)
    {
        $posts = Post::where('user_id', $author->id)->orderBy('created_at', 'desc')->paginate(3);
        return view('pages.author', compact('posts', 'author'));
    }

    public function render()
    {
        return view('livewire.post.index');
    }
}
