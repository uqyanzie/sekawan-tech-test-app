<?php

namespace App\Http\Livewire\VehicleLoans;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\User;

class CreateVehicleLoan extends Component
{
    use AuthorizesRequests;
    
    public $users;

    public function mount() { 
        $this->users = User::select('id', 'name', 'position')->where('role', '<>', 'admin')->where('direct_supervisor_id', '<>', 'null')->get();
    }
    public function render()
    {
        $this->authorize('admin');
        return view('livewire.vehicle-loans.create-vehicle-loan');
    }
}
