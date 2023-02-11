<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
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
                'trip_id' => 6,
                'seat_id' => 1,
                'user_id' => 1
            ],
            [
                'trip_id' => 6,
                'seat_id' => 2,
                'user_id' => 1
            ],
            [
                'trip_id' => 6,
                'seat_id' => 3,
                'user_id' => 1
            ]
        ];

        foreach ($bookings as $booking) {
            Booking::create($booking);
        }
    }
}
