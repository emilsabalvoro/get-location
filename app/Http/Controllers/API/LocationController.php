<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

use App\Interfaces\LocationRepositoryInterface;

class LocationController extends Controller
{
    private LocationRepositoryInterface $locationRepository;
    
    public function __construct(LocationRepositoryInterface $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    public function getLocationsInRadius(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $radius = $request->input('radius');

        $result = $this->locationRepository->getData($latitude, $longitude, $radius);

        if ($result->isEmpty()) {
            return "No location(s) found within query.";
        }

        return response()->json($result);
    }
}