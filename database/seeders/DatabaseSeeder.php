<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            StationSeeder::class,
            BusSeeder::class,
            TripSeeder::class,
            TripStationSeeder::class,
            SeatSeeder::class,
            BookingSeeder::class,
            BookingStationSeeder::class
        ]);
    }
}
