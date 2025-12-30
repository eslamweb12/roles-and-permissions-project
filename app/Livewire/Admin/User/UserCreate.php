<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $password;

    public function rules(){
        return [
           'name'=>'required',
          'email'=>'required|email',
            'password'=>'required',
        ];
    }
    public function submit(){
        $data=$this->validate();
        $data['password']=bcrypt($this->password);
        User::create($data);
        $this->reset(['name','email','password']);
        return redirect()->route('admin.user.index');
    }
    public function render()
    {
        return view('admin.user.user-create')->extends('admin.master')->section('user','active')->section('content');
    }
}
