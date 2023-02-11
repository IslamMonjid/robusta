<?php

namespace App\Repositories\Interfaces;

interface BookingRepositoryInterface
{
    public function getAvalibleSeats($trip_id,$booking_stations,$seats);
    public function create($user_id, $trip_id, $booking_stations, $seat_id);
}
