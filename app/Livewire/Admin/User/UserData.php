<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserData extends Component
{
    use WithPagination;
    public $search;
    public function updatingSearch(){
        $this->resetPage();
    }
    public function deleteUser( $userId){
        $user=User::find($userId);
        $user->delete();
    }
    public function render()
    {
        $data = User::with('roles') // ⭐ preload roles
        ->where('name', 'like', '%'.$this->search.'%')
            ->paginate(10);

        return view('admin.user.user-data', [
            'data' => $data
        ]);
    }

}
