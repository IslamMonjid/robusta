<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TripStation;

class TripStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
                'trip_id' => 1,
                'station_id' => 1,
                'sort' => 1
            ],
            [
                'trip_id' => 1,
                'station_id' => 2,
                'sort' => 2
            ],
            [
                'trip_id' => 2,
                'station_id' => 1,
                'sort' => 1
            ],
            [
                'trip_id' => 2,
                'station_id' => 2,
                'sort' => 2
            ],
            [
                'trip_id' => 2,
                'station_id' => 3,
                'sort' => 3
            ],
            [
                'trip_id' => 3,
                'station_id' => 1,
                'sort' => 1
            ],
            [
                'trip_id' => 3,
                'station_id' => 2,
                'sort' => 2
            ],
            [
                'trip_id' => 3,
                'station_id' => 3,
                'sort' => 3
            ],
            [
                'trip_id' => 3,
                'station_id' => 4,
                'sort' => 4
            ],
            [
                'trip_id' => 4,
                'station_id' => 1,
                'sort' => 1
            ],
            [
                'trip_id' => 4,
                'station_id' => 2,
                'sort' => 2
            ],
            [
                'trip_id' => 4,
                'station_id' => 3,
                'sort' => 3
            ],
            [
                'trip_id' => 4,
                'station_id' => 4,
                'sort' => 4
            ],
            [
                'trip_id' => 4,
                'station_id' => 5,
                'sort' => 5
            ],
            [
                'trip_id' => 5,
                'station_id' => 1,
                'sort' => 1
            ],
            [
                'trip_id' => 5,
                'station_id' => 2,
                'sort' => 2
            ],
            [
                'trip_id' => 5,
                'station_id' => 3,
                'sort' => 3
            ],
            [
                'trip_id' => 5,
                'station_id' => 4,
                'sort' => 4
            ],
            [
                'trip_id' => 5,
                'station_id' => 5,
                'sort' => 5
            ],
            [
                'trip_id' => 5,
                'station_id' => 6,
                'sort' => 6
            ],
            [
                'trip_id' => 6,
                'station_id' => 1,
                'sort' => 1
            ],
            [
                'trip_id' => 6,
                'station_id' => 2,
                'sort' => 2
            ],
            [
                'trip_id' => 6,
                'station_id' => 3,
                'sort' => 3
            ],
            [
                'trip_id' => 6,
                'station_id' => 4,
                'sort' => 4
            ],
            [
                'trip_id' => 6,
                'station_id' => 5,
                'sort' => 5
            ],
            [
                'trip_id' => 6,
                'station_id' => 6,
                'sort' => 6
            ],
            [
                'trip_id' => 6,
                'station_id' => 7,
                'sort' => 7
            ],
        ];

        foreach ($trips as $trip) {
            TripStation::create($trip);
        }
    }
}
