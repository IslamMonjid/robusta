<?php

namespace App\Services;

use App\Services\Interfaces\TripServiceInterface;
use App\Repositories\Interfaces\TripRepositoryInterface;
use App\Repositories\Interfaces\StationRepositoryInterface;
use App\Repositories\Interfaces\BookingRepositoryInterface;

class TripService implements TripServiceInterface
{
    private $tripRepository;
    private $stationRepository;
    private $bookingRepository;

    public function __construct(
        TripRepositoryInterface $tripRepository,
        StationRepositoryInterface $stationRepository,
        BookingRepositoryInterface $bookingRepository
    ) {
        $this->tripRepository = $tripRepository;
        $this->stationRepository = $stationRepository;
        $this->bookingRepository = $bookingRepository;
    }

    public function getAvalibleTrips()
    {
        return $this->tripRepository->getAvalibleTrips();
    }

    public function getTripAvalibleSeats($trip_id, $start_station, $end_station)
    {
        $booking_stations = $this->stationRepository->getStationsForBooking($start_station, $end_station);
        $seats = $this->tripRepository->getAllTripSeats($trip_id);
        $avalible_seats = $this->bookingRepository->getAvalibleSeats($trip_id,$booking_stations,$seats);
        return $avalible_seats;
    }

    public function createBooking($user_id, $trip_id,$start_station, $end_station, $seat_id){
        $booking_stations = $this->stationRepository->getStationsForBooking($start_station, $end_station);
        $booking = $this->bookingRepository->create($user_id, $trip_id, $booking_stations, $seat_id);
        return $booking;
    }
}
