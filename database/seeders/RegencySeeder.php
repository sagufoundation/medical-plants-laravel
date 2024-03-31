<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Regency;

class RegencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // item
        Regency::create([
            'id' => 1,
            'name' => 'Keerom',
            'slug' => 'keerom',
            'coordinates' => '-3.343,140.663',
            'description' => 'Map marker Keerom',
            'image' => 'logo-keerom.png',
            'status' => 'publish',
        ]);

        // item
        Regency::create([
            'id' => 2,
            'name' => 'Jayapura',
            'slug' => 'jayapura',
            'coordinates' => '-3.053,139.960',
            'description' => 'Map marker Jayapura',
            'image' => 'logo-kabupaten-jayapura.png',
            'status' => 'publish',
        ]);

        // item
        Regency::create([
            'id' => 3,
            'name' => 'Kota Jayapura',
            'slug' => 'kota-jayapura',
            'coordinates' => '-2.5535,140.6607',
            'description' => 'Map marker Kota Jayapura',
            'image' => 'logo-kota-jayapura.png',
            'status' => 'publish',
        ]);

        // item
        Regency::create([
            'id' => 4,
            'name' => 'Sarmi',
            'slug' => 'sarmi',
            'coordinates' => '-2.575,139.103',
            'description' => 'Map marker Sarmi',
            'image' => 'logo-kabupaten-sarmi.png',
            'status' => 'publish',
        ]);

        // item
        Regency::create([
            
            'id' => 5,
            'name' => 'Mamberamo Raya',
            'slug' => 'mamberamo-raya',
            'coordinates' => '-2.433,137.829',
            'description' => 'Map marker Mamberamo Raya',
            'image' => 'logo-kabupaten-mamberamo-raya.png',
            'status' => 'publish',
        ]);

        // item
        Regency::create([
            'id' => 6,
            'name' => 'Kepulauan Yapen',
            'slug' => 'kepulauan-yapen',
            'coordinates' => '-1.779,136.357',
            'description' => 'Map marker Kepulauan Yapen',
            'image' => 'logo-kabupaten-kepulauan-yapen.png',
            'status' => 'publish',
        ]);

        // item
        Regency::create([
            
            'id' => 7,
            'name' => 'Biak Numfor',
            'slug' => 'biak-numfor',
            'coordinates' => '-1.027,136.044',
            'description' => 'Map marker Biak Numfor',
            'image' => 'logo-kabupaten-biak-numfor.png',
            'status' => 'publish',
        ]);
    }
}
