<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password;

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function submit()
    {
        $this->validate();

        if (!Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            throw ValidationException::withMessages([
                'email' => 'Incorrect email or password',
            ]);
        }

        return redirect()->route('admin.index');
    }

    public function render()
    {
        return view('admin.auth.login-component');
    }
}
