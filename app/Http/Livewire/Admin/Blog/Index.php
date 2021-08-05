<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Http\Livewire\AdminLayout;
use App\Models\Post;
use Livewire\WithPagination;

class Index extends AdminLayout
{
    use WithPagination;
    public $search;

    public function render()
    {
        $search = '%'.$this->search.'%';

        $columns=[
            [
                'class'=>'col',
                'title'=>'Title',
                'field'=>'title'
            ],
            [
                'class'=>'col',
                'title'=>'Tag',
                'field'=>'tag'
            ],
            [
                'class'=>'col',
                'title'=>'Email',
                'field'=>'email',
            ]
        ];
        $actions=[
            [
                'action'=> function($item){
                    return '<button  x-on:click="ShowModal(\'admin.blog.edit\',{\'id\':'.$item->id.'})" type="button" class="btn btn-primary btn-sm">
                    <i class="align-middle" data-feather="edit"></i> <span class="align-middle">'.__('action.edit').'</span>
                     </button>';
                }
            ],
            [
                'action'=> function($item){
                    return '<button  x-on:click="ShowModal(\'admin.blog.delete\',{\'id\':'.$item->id.'})" type="button" class="btn btn-primary btn-sm">
                    <i class="align-middle" data-feather="delete"></i> <span class="align-middle">'.__('action.delete').'</span>
                     </button>';
                }
            ]
        ];

        return view('livewire.admin.blog.index',[
            'columns'=>$columns,
            'actions'=>$actions,
            'data' => Post::where('tag','like',$search)->paginate(10)
        ]);
    }
}
