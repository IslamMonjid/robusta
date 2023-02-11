<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
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
                'name' => 'Cairo-Giza',
                'bus_id' => 1
            ],
            [
                'name' => 'Cairo-Giza-AlFayyum',
                'bus_id' => 2
            ],
            [
                'name' => 'Cairo-Giza-AlFayyum-AlMinya',
                'bus_id' => 3
            ],
            [
                'name' => "Cairo-Giza-AlFayyum-AlMinya-Asyut",
                'bus_id' => 4
            ],
            [
                'name' => "Cairo-Giza-AlFayyum-AlMinya-Asyut-New Valley",
                'bus_id' => 5
            ],
            [
                'name' => "Cairo-Giza-AlFayyum-AlMinya-Asyut-New Valley-Qena",
                'bus_id' => 6
            ]
        ];

        foreach ($trips as $trip) {
            Trip::create($trip);
        }
    }
}
