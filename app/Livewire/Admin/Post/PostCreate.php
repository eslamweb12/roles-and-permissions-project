<?php

namespace App\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;

class PostCreate extends Component
{
    public $title,$content;

    public function rules(){
        return [
            'title' => 'required',
            'content' => 'required',
        ];
    }
    public function submit(){
        $data=$this->validate();

        Post::create($data);

        $this->reset(['title','content']);
        $this->dispatch('modalToggle');
        $this->dispatch('refreshComponent')->to(PostData::class);

    }
    public function render()
    {
        return view('admin.post.post-create');
    }
}
