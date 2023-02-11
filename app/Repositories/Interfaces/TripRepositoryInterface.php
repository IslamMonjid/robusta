<?php

namespace App\Repositories\Interfaces;

interface TripRepositoryInterface
{
    public function getAvalibleTrips();
    public function getAllTripSeats($trip_id);
}
