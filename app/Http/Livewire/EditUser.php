<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EditUser extends Component
{

    public $user_id;
    public $name;
    public $username;
    public $role;
    public $status;

    // public function mount($user)
    // {

    //     $this->user_id = $user->id;
    //     $this->name = $user->name;
    //     $this->username = $user->username;
    //     $this->role = $user->role;
    //     $this->status = $user->status;
    // }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
