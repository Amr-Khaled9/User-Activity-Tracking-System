<?php

namespace App\Http\Livewire;

use App\Http\Requests\ReceivingDataRequest;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardController extends Component
{
    public function render()
    {
        return view('components.dashboard', [
            'logins' => Event::where('action', 'login')->count(),
            'logouts' => Event::where('action', 'logout')->count(),
            'clicks' => Event::where('action', 'click')->count(),
            'pageviews' => Event::where('action', 'view')->count(),
        ]);
    }
}
