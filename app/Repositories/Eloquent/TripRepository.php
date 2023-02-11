<?php

namespace App\Repositories\Eloquent;

use App\Models\Trip;
use App\Models\Seat;
use App\Repositories\Interfaces\TripRepositoryInterface;

class TripRepository implements TripRepositoryInterface
{
    /**      
     * @var Model      
     */
    protected $model;

    /**
     * TripRepository constructor.
     *
     * @param Trip $model
     */
    public function __construct(Trip $model)
    {
        $this->model = $model;
    }

    public function getAvalibleTrips()
    {
        $trips = Trip::with('stations')->get();
        return $trips;
    }

    public function getAllTripSeats($trip_id)
    {
        $trip = Trip::with('bus')->where('id',$trip_id)->first();
        $seats = Seat::where('bus_id',$trip->bus_id)->get();
        return $seats;
    }
}
