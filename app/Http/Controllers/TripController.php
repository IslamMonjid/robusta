<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\TripServiceInterface;

class TripController extends Controller
{

    private $TripService;

    public function __construct(TripServiceInterface $TripService)
    {
        $this->TripService = $TripService;
    }

    public function getAvalibleTrips(){
        $trips = $this->TripService->getAvalibleTrips();

        return response()->json([
            'status' => 'success',
            'trips' => $trips
        ], 200);
    }
}
