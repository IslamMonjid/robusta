<?php

namespace App\Repositories\Interfaces;

interface StationRepositoryInterface
{
    public function getStationsForBooking($start_station, $end_station);
}
