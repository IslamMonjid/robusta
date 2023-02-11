<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\TripRepositoryInterface;
use App\Repositories\Eloquent\TripRepository;
use App\Repositories\Interfaces\StationRepositoryInterface;
use App\Repositories\Eloquent\StationRepository;
use App\Repositories\Interfaces\BookingRepositoryInterface;
use App\Repositories\Eloquent\BookingRepository;

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
        $this->app->bind(StationRepositoryInterface::class, StationRepository::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);
    }

}
