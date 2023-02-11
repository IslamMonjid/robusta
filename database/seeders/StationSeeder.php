<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            [
                'name' => 'Cairo'
            ],
            [
                'name' => 'Giza'
            ],
            [
                'name' => 'AlFayyum'
            ],
            [
                'name' => "AlMinya"
            ],
            [
                'name' => "Asyut"
            ],
            [
                'name' => "New Valley"
            ],
            [
                'name' => "Qena"
            ]
        ];

        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}
