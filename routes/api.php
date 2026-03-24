<?php

use App\Http\Controllers\EventController;
use App\Http\Livewire\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/events', [EventController::class, 'receivingData']);
   // ->middleware(['throttle:events', 'throttle:global']);


