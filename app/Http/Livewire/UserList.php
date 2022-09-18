<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class UserList extends Component
{
    public $users; // Variable use to get All Users from database
    public $user = null; // variable use to edit found user
    public $uid;
    public $name;
    public $email;
    public $toEditUserFound = null; //
    public $isClose = false;
    public $updateAlert = false;

//    Render Function
    public function render()
    {
        $this->users = User::all()->toArray();
        return view('livewire.user-list');
    }

//    User Delete Function
    public function delete($id)
    {
        $delUser = User::find($id);
        $delUser->delete();

    }

//    Edit User Function
    public function edit($index)
    {
        $this->isClose = true;
        $this->toEditUserFound = $index;
        $this->user = $this->users[$index];
    }

    public function update($id)
    {
        $this->validate([
            'user.name' => 'required',
            'user.email' => 'required|email'
        ]);
        $tempuser = User::find($id);
        if ($tempuser->name != $this->user['name'] || $tempuser->email != $this->user['email']) {
            if ($tempuser->name != $this->user['name']) {
                $tempuser->name = $this->user['name'];
                session()->flash('message', "User name {$tempuser->name} successfully updated to {$this->user['name']}.");
            } elseif ($tempuser->email != $this->user['email']) {
                $tempuser->email = $this->user['email'];
                session()->flash('message', "User email {$tempuser->email} successfully updated to {$this->user['email']}.");
            }
            else{
                session()->flash('message', "User {$tempuser->name} successfully updated.");
            }
            $tempuser->save();
            $this->close();
            $this->updateAlert = true;
            $this->toEditUserFound = null;
        } else {
            $this->toEditUserFound = null;
        }
    }

//    Used to Close Success Message Box after Successfully Edited User
    public function close()
    {
        $this->isClose = !$this->isClose;
    }

}
