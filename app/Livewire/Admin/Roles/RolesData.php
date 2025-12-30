<?php

namespace App\Livewire\Admin\Roles;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RolesData extends Component
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
        return view('admin.roles.roles-data',[
            'data' => Role::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
