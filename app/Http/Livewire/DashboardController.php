<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardController extends Component
{
    public function render()
    {
        return view('components.dashboard');
    }
}
