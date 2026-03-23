<?php

namespace App\Http\Livewire;

use App\Http\Requests\ReceivingDataRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardController extends Component
{
    public function receivingData(ReceivingDataRequest $request)
    {
        return response()->json([
            'message' => 'Event received'
        ]);
    }
    public function render()
    {
        return view('components.dashboard');
    }
}
