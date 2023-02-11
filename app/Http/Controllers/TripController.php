<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\Interfaces\TripServiceInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{

    private $TripService;

    public function __construct(TripServiceInterface $TripService)
    {
        $this->TripService = $TripService;
        $this->middleware('auth:api', ['only' => ['createBooking']]);
    }

    public function getAvalibleTrips()
    {
        $trips = $this->TripService->getAvalibleTrips();

        return response()->json([
            'status' => 'success',
            'trips' => $trips
        ], 200);
    }

    public function getSeats(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'trip_id' => 'required|integer',
            'start_station' => 'required|integer',
            'end_station' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $seats = $this->TripService->getTripAvalibleSeats($request->trip_id, $request->start_station, $request->end_station);

        return response()->json([
            'status' => 'success',
            'seats' => $seats
        ], 200);
    }

    public function createBooking(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'trip_id' => 'required|integer',
            'start_station' => 'required|integer',
            'end_station' => 'required|integer',
            'seat_id'   => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $user_id = Auth::user()->id;
        $booking = $this->TripService->createBooking($user_id, $request->trip_id,$request->start_station, $request->end_station, $request->seat_id);

        return response()->json([
            'status' => 'success',
            'booking' => $booking
        ], 200);
    }
}
