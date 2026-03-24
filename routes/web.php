<?php

use App\Http\Livewire\auth;
use App\Http\Livewire\AuthController;
use App\Http\Livewire\DashboardController;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', AuthController::class)->name('login');


Route::get('/dashboard', DashboardController::class)->name('dashboard')->middleware('auth');
// Route::post('/events',[DashboardController::class,'showData'])->middleware('auth');

Route::post('/logout', function () {
    FacadesAuth::logout();
    session()->invalidate();
    session()->regenerateToken();

    return redirect()->route('login');
})->name('logout');