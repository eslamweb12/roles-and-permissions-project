<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{
    public User $user;

    public $name;
    public $email;
    public $password;

    public $roles;            // all roles list
    public $selectedRole;     // chosen role

    public function mount(User $user)
    {
        $this->user  = $user;

        $this->name  = $user->name;
        $this->email = $user->email;

        $this->roles = Role::all();

        // Load user's current role if exists
        $this->selectedRole = $user->roles()->pluck('name')->first();
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', Rule::unique('users', 'email')->ignore($this->user)],
            'password' => ['nullable', 'string', 'min:8', 'max:50'],
            'selectedRole' => ['required']
        ];
    }

    public function submit()
    {

        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => empty($this->password)
                ? $this->user->password
                : bcrypt($this->password),
        ]);

        // Assign Role
        $this->user->syncRoles([$this->selectedRole]);

        session()->flash('success', 'User updated successfully');

        return redirect()->route('admin.user.index');
    }

    public function render()
    {
        return view('admin.user.user-edit')
            ->extends('admin.master')
            ->section('user', 'active')
            ->section('content');
    }
}
