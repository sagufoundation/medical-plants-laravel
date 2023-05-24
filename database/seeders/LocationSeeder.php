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
            'icon_id' => 3,
            'tribes' => 'Doberai',
            'desc' => 'Wilayah adat Doberai, Papua.',
            'lat' => '-0.814597',
            'long' => '132.046705',
            'link' => '',
            'status' => '1',
            'slug' => 'doberai',
        ]);

        $location = Location::create([
            'icon_id' => 3,
            'tribes' => 'Mamta',
            'desc' => 'Wilayah adat Mamta, Papua.',
            'lat' => '-2.5651361',
            'long' => '140.6109871,12',
            'link' => '',
            'status' => '1',
            'slug' => 'mamta',
        ]);


        $location = Location::create([
            'icon_id' => 3,
            'tribes' => 'Saereri',
            'desc' => 'Wilayah adat Saereri, Papua.',
            'lat' => '-0.9514804',
            'long' => '135.3263697,9',
            'link' => '',
            'status' => '1',
            'slug' => 'saereri',
        ]);

        $location = Location::create([
            'icon_id' => 3,
            'tribes' => 'Anim Ha',
            'desc' => 'Wilayah adat Anim Ha, Papua.',
            'lat' => '-0.9514804',
            'long' => '135.3263697,9',
            'link' => '',
            'status' => '1',
            'slug' => 'anim-ha',
        ]);

        $location = Location::create([
            'icon_id' => 3,
            'tribes' => 'La Pago',
            'desc' => 'Wilayah adat La Pago, Papua.',
            'lat' => '-4.1225095',
            'long' => '138.647889,10',
            'link' => '',
            'status' => '1',
            'slug' => 'la-pago',
        ]);

        $location = Location::create([
            'icon_id' => 3,
            'tribes' => 'Mee Pago',
            'desc' => 'Wilayah adat Mee Pago, Papua.',
            'lat' => '-3.3650524',
            'long' => '135.4666164,13',
            'link' => '',
            'status' => '1',
            'slug' => 'mee-pago',
        ]);

        $location = Location::create([
            'icon_id' => 3,
            'tribes' => 'Domberai',
            'desc' => 'Wilayah adat Domberai, Papua.',
            'lat' => '-1.6506847',
            'long' => '131.8144663,9',
            'link' => '',
            'status' => '1',
            'slug' => 'domberai',
        ]);

    }
}
