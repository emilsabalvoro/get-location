<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::truncate();
        $csvData = fopen(base_path('database/csv/data.csv'), 'r');

        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            Location::create([
                'location_name' => $data['0'],
                'latitude' => $data['1'],
                'longitude' => $data['2'],
            ]);
        }
        fclose($csvData);
    }
}
