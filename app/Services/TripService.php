<?php

namespace App\Services;

use App\Services\Interfaces\TripServiceInterface;
use App\Repositories\Interfaces\TripRepositoryInterface;

class TripService implements TripServiceInterface
{
    private $tripRepository;

    public function __construct(TripRepositoryInterface $tripRepository)
    {
        $this->tripRepository = $tripRepository;
    }

    public function getAvalibleTrips(){
        return $this->tripRepository->getAvalibleTrips();
    }
}
