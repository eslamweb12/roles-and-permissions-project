<?php

namespace App\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;

class PostUpdate extends Component
{
    public $post,$title,$content;

    public $listeners=[
        'update',
    ];
    public function rules(){
        return [
            'title'=>'nullable',
            'content'=>'nullable'
        ];
    }
    public function update($id){
        $this->post=Post::find($id);
        $this->title=$this->post->title;
        $this->content=$this->post->content;
        $this->dispatch('modalUpdate');

    }
    public function submit()
    {
        $data = $this->validate();

        if ($this->post) {
            $this->post->update($data);
        }
        $this->reset(['post','title','content']);
        $this->dispatch('modalUpdate');
        $this->dispatch('refreshComponent')->to(PostData::class);

    }

    public function render()
    {
        return view('admin.post.post-update');
    }
}
