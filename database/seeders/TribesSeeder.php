<?php

namespace Database\Seeders;

use App\Models\Tribes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TribesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // item
        Tribes::create([
            'id' => 1,
            'tribe_name' => 'Biak',
            'tribe_slug' => 'biak',
            'tribe_coordinates' => '-0.9386,135.9242',
            'description' => 'Map marker for Biak tribe in Biak Regency',
            'status' => 'publish',
        ]);

        // item
        Tribes::create([
            'id' => 2,
            'tribe_name' => 'Waropen',
            'tribe_slug' => 'waropen',
            'tribe_coordinates' => '-0.9386,135.9242',
            'description' => 'Map marker for Moi tribe in Jayapura Regency',
            'status' => 'publish',
        ]);

        // item
        Tribes::create([
            'id' => 3,
            'tribe_name' => 'Moi Tabi',
            'tribe_slug' => 'moi-tabi',
            'tribe_coordinates' => '-2.4937/140.3799',
            'description' => 'Map marker for Moi tribe in Jayapura Regency',
            'status' => 'publish',
        ]);
    }
}
