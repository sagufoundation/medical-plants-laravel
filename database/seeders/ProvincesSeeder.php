<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provinces;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provinces::create([
            'name' => 'Papua',
            'slug' => 'papua',
        ]);

        Provinces::create([
            'name' => 'Papua Pegunungan',
            'slug' => 'papua-pegunung',
        ]);

        Provinces::create([
            'name' => 'Papua Selatan',
            'slug' => 'papua-selatan',
        ]);

        Provinces::create([
            'name' => 'Papua Tengah',
            'slug' => 'papua-tengah',
        ]);

        Provinces::create([
            'name' => 'Papua Barat',
            'slug' => 'papua-barat',
        ]);

        Provinces::create([
            'name' => 'Papua Barat Daya',
            'slug' => 'papua-barat-daya',
        ]);
    }
}
