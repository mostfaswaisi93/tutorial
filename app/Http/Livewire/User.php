<?php

namespace App\Http\Livewire;

use App\Models\User as Users;
use Livewire\Component;

class User extends Component
{
    public $users;

    public function render()
    {
        $this->users = Users::all();
        return view('livewire.user');
    }
}
