<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\TripRepositoryInterface;
use App\Repositories\Eloquent\TripRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TripRepositoryInterface::class, TripRepository::class);
    }

}
