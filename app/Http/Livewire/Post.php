<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $posts, $title, $description, $postId, $updatePost = false, $addPost = false;

    public function render()
    {
        return view('livewire.post');
    }
}
