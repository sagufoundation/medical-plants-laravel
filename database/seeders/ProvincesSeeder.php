<?php

namespace Database\Seeders;


use App\Models\Province;
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
        Province::create([
            'name' => 'Papua',
            'slug' => 'papua',
             'status' => 'Publish',
        ]);

        Province::create([
            'name' => 'Papua Pegunungan',
            'slug' => 'papua-pegunung',
             'status' => 'Publish',
        ]);

        Province::create([
            'name' => 'Papua Selatan',
            'slug' => 'papua-selatan',
             'status' => 'Publish',
        ]);

        Province::create([
            'name' => 'Papua Tengah',
            'slug' => 'papua-tengah',
             'status' => 'Publish',
        ]);

        Province::create([
            'name' => 'Papua Barat',
            'slug' => 'papua-barat',
             'status' => 'Publish',
        ]);

        Province::create([
            'name' => 'Papua Barat Daya',
            'slug' => 'papua-barat-daya',
             'status' => 'Publish',
        ]);
    }
}
