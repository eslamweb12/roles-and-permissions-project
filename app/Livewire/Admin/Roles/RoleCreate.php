<?php

namespace App\Livewire\Admin\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RoleCreate extends Component
{
    public $name;
    public $permissions = [];   // selected permissions ids
    public $allPermissions;     // list to show in UI

    public function mount()
    {
        $this->allPermissions = Permission::all();
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
        $this->authorize('role-create'); // هيرمي 403 لو المستخدم مش عنده permission

        $data = $this->validate();

        // Create Role
        $role = Role::create([
            'name' => $this->name,
            'guard_name' => 'web'
        ]);

        // Attach permissions
        $role->syncPermissions($this->permissions);

        $this->dispatch('modalToggle');
        $this->dispatch('refreshComponent')->to(RolesData::class);
    }
    public function render()
    {
        return view('admin.roles.role-create');
    }
}
