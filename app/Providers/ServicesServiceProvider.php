<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\AuthServiceInterface;
use App\Services\AuthService;
use App\Services\Interfaces\TripServiceInterface;
use App\Services\TripService;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(TripServiceInterface::class, TripService::class);
    }
}
