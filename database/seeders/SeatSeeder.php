<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seat;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats = [
            [
                'title' => '1A',
                'bus_id' => 1
            ],
            [
                'title' => '2A',
                'bus_id' => 1
            ],
            [
                'title' => '1B',
                'bus_id' => 1
            ],
            [
                'title' => "2B",
                'bus_id' => 1
            ],
            [
                'title' => "1C",
                'bus_id' => 1
            ],
            [
                'title' => "2C",
                'bus_id' => 1
            ],
            [
                'title' => '1D',
                'bus_id' => 1
            ],
            [
                'title' => '2D',
                'bus_id' => 1
            ],
            [
                'title' => '1E',
                'bus_id' => 1
            ],
            [
                'title' => "2E",
                'bus_id' => 1
            ],
            [
                'title' => "1F",
                'bus_id' => 1
            ],
            [
                'title' => "2F",
                'bus_id' => 1
            ],
            [
                'title' => '1A',
                'bus_id' => 2
            ],
            [
                'title' => '2A',
                'bus_id' => 2
            ],
            [
                'title' => '1B',
                'bus_id' => 2
            ],
            [
                'title' => "2B",
                'bus_id' => 2
            ],
            [
                'title' => "1C",
                'bus_id' => 2
            ],
            [
                'title' => "2C",
                'bus_id' => 2
            ],
            [
                'title' => '1D',
                'bus_id' => 2
            ],
            [
                'title' => '2D',
                'bus_id' => 2
            ],
            [
                'title' => '1E',
                'bus_id' => 2
            ],
            [
                'title' => "2E",
                'bus_id' => 2
            ],
            [
                'title' => "1F",
                'bus_id' => 2
            ],
            [
                'title' => "2F",
                'bus_id' => 2
            ],
            [
                'title' => '1A',
                'bus_id' => 3
            ],
            [
                'title' => '2A',
                'bus_id' => 3
            ],
            [
                'title' => '1B',
                'bus_id' => 3
            ],
            [
                'title' => "2B",
                'bus_id' => 3
            ],
            [
                'title' => "1C",
                'bus_id' => 3
            ],
            [
                'title' => "2C",
                'bus_id' => 3
            ],
            [
                'title' => '1D',
                'bus_id' => 3
            ],
            [
                'title' => '2D',
                'bus_id' => 3
            ],
            [
                'title' => '1E',
                'bus_id' => 3
            ],
            [
                'title' => "2E",
                'bus_id' => 3
            ],
            [
                'title' => "1F",
                'bus_id' => 3
            ],
            [
                'title' => "2F",
                'bus_id' => 3
            ],
            [
                'title' => '1A',
                'bus_id' => 4
            ],
            [
                'title' => '2A',
                'bus_id' => 4
            ],
            [
                'title' => '1B',
                'bus_id' => 4
            ],
            [
                'title' => "2B",
                'bus_id' => 4
            ],
            [
                'title' => "1C",
                'bus_id' => 4
            ],
            [
                'title' => "2C",
                'bus_id' => 4
            ],
            [
                'title' => '1D',
                'bus_id' => 4
            ],
            [
                'title' => '2D',
                'bus_id' => 4
            ],
            [
                'title' => '1E',
                'bus_id' => 4
            ],
            [
                'title' => "2E",
                'bus_id' => 4
            ],
            [
                'title' => "1F",
                'bus_id' => 4
            ],
            [
                'title' => "2F",
                'bus_id' => 4
            ],
            [
                'title' => '1A',
                'bus_id' => 5
            ],
            [
                'title' => '2A',
                'bus_id' => 5
            ],
            [
                'title' => '1B',
                'bus_id' => 5
            ],
            [
                'title' => "2B",
                'bus_id' => 5
            ],
            [
                'title' => "1C",
                'bus_id' => 5
            ],
            [
                'title' => "2C",
                'bus_id' => 5
            ],
            [
                'title' => '1D',
                'bus_id' => 5
            ],
            [
                'title' => '2D',
                'bus_id' => 5
            ],
            [
                'title' => '1E',
                'bus_id' => 5
            ],
            [
                'title' => "2E",
                'bus_id' => 5
            ],
            [
                'title' => "1F",
                'bus_id' => 5
            ],
            [
                'title' => "2F",
                'bus_id' => 5
            ],
            [
                'title' => '1A',
                'bus_id' => 6
            ],
            [
                'title' => '2A',
                'bus_id' => 6
            ],
            [
                'title' => '1B',
                'bus_id' => 6
            ],
            [
                'title' => "2B",
                'bus_id' => 6
            ],
            [
                'title' => "1C",
                'bus_id' => 6
            ],
            [
                'title' => "2C",
                'bus_id' => 6
            ],
            [
                'title' => '1D',
                'bus_id' => 6
            ],
            [
                'title' => '2D',
                'bus_id' => 6
            ],
            [
                'title' => '1E',
                'bus_id' => 6
            ],
            [
                'title' => "2E",
                'bus_id' => 6
            ],
            [
                'title' => "1F",
                'bus_id' => 6
            ],
            [
                'title' => "2F",
                'bus_id' => 6
            ]
        ];

        foreach ($seats as $seat) {
            Seat::create($seat);
        }
    }
}
