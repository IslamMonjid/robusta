<?php

namespace App\Repositories\Interfaces;

interface BookingRepositoryInterface
{
    public function getAvalibleSeats($trip_id,$booking_stations,$seats);
}
