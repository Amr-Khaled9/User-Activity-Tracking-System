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
    public $logins;
    public $logouts;
    public $clicks;
    public $pageviews;

    public function mount()
    {
        // تجيب عدد كل نوع من الأحداث
        $this->logins = Event::where('action', 'login')->count();
        $this->logouts = Event::where('action', 'logout')->count();
        $this->clicks = Event::where('action', 'click')->count();
        $this->pageviews = Event::where('action', 'pageview')->count();
    }
    public function render()
    {
        return view('components.dashboard');
    }
}
