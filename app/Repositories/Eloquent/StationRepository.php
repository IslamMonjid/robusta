<?php

namespace App\Repositories\Eloquent;

use App\Models\Trip;
use App\Models\Station;
use App\Repositories\Interfaces\StationRepositoryInterface;

class StationRepository implements StationRepositoryInterface
{
    /**      
     * @var Model      
     */
    protected $model;

    /**
     * StationRepository constructor.
     *
     * @param Station $model
     */
    public function __construct(Station $model)
    {
        $this->model = $model;
    }

    public function getStationsForBooking($start_station, $end_station)
    {
        $stations = Station::whereBetween('id', [$start_station, $end_station])->pluck('id');
        return $stations;
    }


}
