<?php

namespace App\Repositories\Eloquent;

use App\Models\Booking;
use App\Repositories\Interfaces\BookingRepositoryInterface;

class BookingRepository implements BookingRepositoryInterface
{
    /**      
     * @var Model      
     */
    protected $model;

    /**
     * TripRepository constructor.
     *
     * @param Booking $model
     */
    public function __construct(Booking $model)
    {
        $this->model = $model;
    }

    public function getAvalibleSeats($trip_id, $booking_stations, $seats)
    {
        $avalible_seats = [];
        foreach ($seats as $seat) {

            $seat_id = $seat->id;
            $bookings = Booking::whereHas('stations', function ($q) use ($trip_id, $booking_stations, $seat_id) {
                $q->where('trip_id', $trip_id);
                $q->where('seat_id', $seat_id);
                $q->whereIn('station_id', $booking_stations);
            })->get();

            if (count($bookings) == 0) {
                array_push($avalible_seats, $seat);
            }
        }
        return $avalible_seats;
    }
}
