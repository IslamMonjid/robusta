<?php
namespace App\Services\Interfaces;

interface TripServiceInterface
{
   public function getAvalibleTrips();
   public function getTripAvalibleSeats($trip_id,$start_station,$end_station);
   public function createBooking($user_id, $trip_id,$start_station, $end_station, $seat_id);
}