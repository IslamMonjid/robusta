<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookingStation;

class BookingStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = [
            [
                'booking_id' => 1,
                'station_id' => 1,
            ],
            [
                'booking_id' => 1,
                'station_id' => 2,
            ],
            [
                'booking_id' => 1,
                'station_id' => 3,
            ],
            [
                'booking_id' => 1,
                'station_id' => 4,
            ],
            [
                'booking_id' => 1,
                'station_id' => 5,
            ],
            [
                'booking_id' => 1,
                'station_id' => 6,
            ],
            [
                'booking_id' => 1,
                'station_id' => 7,
            ],
            [
                'booking_id' => 2,
                'station_id' => 1,
            ],
            [
                'booking_id' => 2,
                'station_id' => 2,
            ],
            [
                'booking_id' => 2,
                'station_id' => 3,
            ],
            [
                'booking_id' => 3,
                'station_id' => 4,
            ],
            [
                'booking_id' => 3,
                'station_id' => 5,
            ],
            [
                'booking_id' => 3,
                'station_id' => 6,
            ]
        ];

        foreach ($bookings as $booking) {
            BookingStation::create($booking);
        }
    }
}
