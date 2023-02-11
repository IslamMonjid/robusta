<?php

namespace App\Repositories\Eloquent;

use App\Models\Trip;
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

    public function getAvalibleTrips(){
        $trips = Trip::with('stations')->get();
        return $trips;
    }
}