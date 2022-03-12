<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as UserModel;

class User extends Component
{
    public $users;
    public $name;
    public $email;
    public $user_id;

    public function render()
    {
        return view('livewire.user');
    }

    public function mount(){
        $this->users = UserModel::where('type','2')->get();
    }

    public function edit($id){
        $user = UserModel::find($id);
        $this->name = $user->name;
        $this->email= $user->email;
        $this->user_id = $user->id;
    }

    public function update(){
        $user = UserModel::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();
        $this->dispatchBrowserEvent('updated');
        $this->mount();
    }

    public function destroy($id){
        $res = UserModel::where('id',$id)->delete();
        if($res){
            $this->mount();
        }
    }
}
