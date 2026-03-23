<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('events', function (Request $request) {
            return Limit::perMinute(100)->by($request->input('user_id'));
        });
        RateLimiter::for('global', function (Request $request) {
            return Limit::perMinute(5000); // System
        });
    }
}
