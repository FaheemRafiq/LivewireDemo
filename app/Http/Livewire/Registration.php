<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Livewire\Component;


class Registration extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $confirm_password;

    public function  formValidate(){
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = $this->firstname .' '. $this->lastname;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        return redirect()->to("/");
    }
    public function render()
    {
        return view('livewire.registration');
    }

}
