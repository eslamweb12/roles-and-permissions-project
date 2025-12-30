<?php

namespace App\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostData extends Component
{
    use WithPagination;
    public $search;
    public $listeners=[
        'refreshComponent' => '$refresh',
    ];

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.post.post-data',[
            'data' => Post::where('title','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
