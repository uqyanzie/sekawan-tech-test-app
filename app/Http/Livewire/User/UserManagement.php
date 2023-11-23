<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserManagement extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all()->sortBy('name');
    }

    public function render()
    {
        $users = $this->users;
        $no = 1;
        return view('livewire.user.user-management', compact('no'));
    }
}
