<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = Location::create([
            'icon_id'   => 3,
            'tribes'    => 'Doberai',
            'slug'      => 'doberai',
            'desc'      => 'Wilayah Adat Doberai, Papua.',
            'lat'       => '-0.814597',
            'long'      => '132.046705',
            'link'      => 'https://medicinalplantspapua.org/',
            'status'    => 'Publish',
        ]);

        $location = Location::create([
            'icon_id'   => 3,
            'tribes'    => 'Mamta',
            'slug'      => 'mamta',
            'desc'      => 'Wilayah Adat Mamta, Papua.',
            'lat'       => '-2.5651361',
            'long'      => '140.6109871,12',
            'link'      => 'https://medicinalplantspapua.org/',
            'status'    => 'Publish',
        ]);


        $location = Location::create([
            'icon_id'   => 3,
            'tribes'    => 'Saireri',
            'slug'      => 'saireri',
            'desc'      => 'Wilayah Adat Saereri, Papua.',
            'lat'       => '-0.9514804',
            'long'      => '135.3263697,9',
            'link'      => 'https://medicinalplantspapua.org/',
            'status'    => 'Publish',
        ]);

        $location = Location::create([
            'icon_id'   => 3,
            'tribes'    => 'Anim Ha',
            'slug'      => 'anim-ha',
            'desc'      => 'Wilayah Adat Anim Ha, Papua.',
            'lat'       => '-0.9514804',
            'long'      => '135.3263697,9',
            'link'      => 'https://medicinalplantspapua.org/',
            'status'    => 'Publish',
        ]);

        $location = Location::create([
            'icon_id'   => 3,
            'tribes'    => 'La Pago',
            'slug'      => 'la-pago',
            'desc'      => 'Wilayah Adat La Pago, Papua.',
            'lat'       => '-4.1225095',
            'long'      => '138.647889,10',
            'link'      => 'https://medicinalplantspapua.org/',
            'status'    => 'Publish',
        ]);

        $location = Location::create([
            'icon_id'   => 3,
            'tribes'    => 'Mee Pago',
            'slug'      => 'mee-pago',
            'desc'      => 'Wilayah Adat Mee Pago, Papua.',
            'lat'       => '-3.3650524',
            'long'      => '135.4666164,13',
            'link'      => 'https://medicinalplantspapua.org/',
            'status'    => 'Publish',
        ]);

        $location = Location::create([
            'icon_id'   => 3,
            'tribes'    => 'Domberai',
            'slug'      => 'domberai',
            'desc'      => 'Wilayah Adat Domberai, Papua.',
            'lat'       => '-1.6506847',
            'long'      => '131.8144663,9',
            'link'      => 'https://medicinalplantspapua.org/',
            'status'    => 'Publish',
        ]);

    }
}
