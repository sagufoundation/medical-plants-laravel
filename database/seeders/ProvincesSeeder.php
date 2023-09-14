<?php

namespace Database\Seeders;

use App\Models\Provinces;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provinces::create([
            'name' => 'Papua',
            'slug' => 'papua',
             'status' => 'Publish',
        ]);

        Provinces::create([
            'name' => 'Papua Pegunungan',
            'slug' => 'papua-pegunung',
             'status' => 'Publish',
        ]);

        Provinces::create([
            'name' => 'Papua Selatan',
            'slug' => 'papua-selatan',
             'status' => 'Publish',
        ]);

        Provinces::create([
            'name' => 'Papua Tengah',
            'slug' => 'papua-tengah',
             'status' => 'Publish',
        ]);

        Provinces::create([
            'name' => 'Papua Barat',
            'slug' => 'papua-barat',
             'status' => 'Publish',
        ]);

        Provinces::create([
            'name' => 'Papua Barat Daya',
            'slug' => 'papua-barat-daya',
             'status' => 'Publish',
        ]);
    }
}
