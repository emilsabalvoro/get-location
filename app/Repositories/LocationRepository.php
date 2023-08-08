<?php

namespace App\Repositories;

use App\Interfaces\LocationRepositoryInterface;
use App\Models\Location;

class LocationRepository implements LocationRepositoryInterface
{
    public function getData($latitude, $longitude, $radius)
    {
        return Location::select('location_name', 'latitude', 'longitude')
        ->selectRaw('(3959 * acos (
            cos ( radians(?) )
            * cos( radians( latitude ) )
            * cos( radians( longitude ) - radians(?) )
            + sin ( radians(?) )
            * sin( radians( latitude )))) AS distance', [$latitude, $longitude, $latitude])
        ->havingRaw("distance < ?", [$radius])
        ->get();
    }
}