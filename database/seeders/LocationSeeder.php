<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = Location::create([
            'icon_id' => 1,
            'tribes' => 'Doberai',
            'desc' => 'Wilayah adat Doberai, Papua.',
            'long' => '132.046705',
            'lat' => '-0.814597',
            'link' => '',
            'status' => '1',
            'slug' => 'doberai',
        ]);

        $location = Location::create([
            'icon_id' => 1,
            'tribes' => 'Saireri',
            'desc' => 'Wilayah adat Saireri, Papua.',
            'long' => '136.1359288,9',
            'lat' => '140.5625678,11',
            'link' => '',
            'status' => '1',
            'slug' => 'saireri',
        ]);

    }
}
