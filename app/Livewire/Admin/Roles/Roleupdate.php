<?php

namespace App\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RoleUpdate extends Component
{
    use AuthorizesRequests;

    protected $listeners = [
        'update'
    ];

    public $selectedRole;
    public $name;
    public $permissions = [];
    public $allPermissions;

    public function mount()
    {
        $this->allPermissions = Permission::all();
    }

    public function update($id)
    {

        $this->selectedRole = Role::find($id);
        $this->name = $this->selectedRole->name;
        $this->permissions = $this->selectedRole->permissions()->pluck('id')->toArray();

        // Dispatch browser event to show modal
        $this->dispatch('modalUpdate');
    }

    protected function rules()
    {
        return [
            'name' => 'required|string',
            'permissions' => 'array|min:1'
        ];
    }

    public function submit()
    {
        $this->authorize('role-edit');

        $data = $this->validate();

        // Update role name
        $this->selectedRole->update([
            'name' => $this->name,
        ]);

        // Get permission names from IDs
        $permissionNames = Permission::whereIn('id', $this->permissions)
            ->pluck('name')
            ->toArray();

        // Sync permissions using names
        $this->selectedRole->syncPermissions($permissionNames);

        $this->dispatch('modalUpdate');
        $this->dispatch('refreshComponent')->to(RolesData::class);
    }


    public function render()
    {
        return view('admin.roles.roleupdate'); // لازم تعمل view منفصلة للـ update
    }
}
