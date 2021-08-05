<?php

namespace App\Http\Livewire\Web;

use  App\Http\Livewire\WebLayout;
use App\Models\Post;

class Wellcome extends WebLayout
{
    public $title; 
    public $content;
    public $tag; 
    public $data;

    public function mount()
    {
        $this->data = Post::all();
    }

    public function render()
    {
        return view('livewire.web.wellcome');
    }
}
