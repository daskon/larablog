<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Http\Livewire\Modal;
use App\Models\Post;

class Edit extends Modal
{
    public $_id;
    public $title;
    public $tag;
    public $email;
    public $body;

    protected $rules = [
        'title' => 'required|string',
        'tag' => 'required|string',
        'email' => 'required|string',
        'body' => 'required|string'
    ];

    public function IsNew(){
        return !isset($this->_id);
    }

    public function updatingShow($value)
    {
        $this->resetForm();
    }
    
    /**
     * reset form fields
     *
     * @return void
     */
    public function resetForm(){
        $this->_id = null;
        $this->title = '';
        $this->tag = '';
        $this->email = '';
        $this->body = '';
        $this->resetErrorBag();
        $this->resetValidation();
    }
    
    /**
     * new and edit blog post function
     *
     * @return void
     */
    public function submit(){
        
        if($this->IsNew()){
            $this->rules['title']='required|string|max:255';
            $this->rules['tag']='required|string';
            $this->rules['email']='required';
            $this->rules['body']='required|string|max:255';
        }else{
            $this->rules['email']='required';
            $this->rules['title']='required';
            $this->rules['body']='required';
        }

        $this->validate();        

        if($this->IsNew()){
            $post = new Post();
        }else{
            $post = Post::find($this->_id);
        }
        $post->title = $this->title;
        $post->tag   = $this->tag;
        $post->email = $this->email;
        $post->body  = $this->body;
        $post->save();
        $this->dispatchBrowserEvent('load-page', ['page' => 'admin.blog.index']);
        $this->show=false;
        $this->resetForm();
    }

    public function render()
    {
        if(isset($this->payload)){

            $this->_id = $this->payload['id'];

            $post = Post::find($this->_id);

            $this->title = $post->title;
            $this->tag   = $post->tag;
            $this->email = $post->email;
            $this->body  = $post->body;
        }

        return view('livewire.admin.blog.edit',[
            'IsNew'=>$this->IsNew()
        ]);
    }
}
