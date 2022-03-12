<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = 'admin@gmail.com';
    public $password = '123456';

    protected $rules = [
        'email' =>'required|email',
        'password' =>'required|min:4',
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function login(){
        $this->validate();
        if(Auth::attempt(['email' => $this->email,'password' => $this->password])){
            return redirect()->route('dashboard');
        }else{
            session()->flash('failed', 'Invalid Credentials');
        }
    }
}
