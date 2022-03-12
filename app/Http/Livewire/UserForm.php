<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{
    public $email;
    public $password;
    public $name;
    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'name' => 'required|min:4'
    ];

    public function render()
    {
        return view('livewire.user-form');
    }

    public function save(){
        $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->save();
        if($user->id){
            $this->reset('email','password','name');
            session()->flash('success','User Created');
            return redirect()->route('user.list');
        }else{
            session()->flash('error','Something Went Wrong');
        }
    }
}
