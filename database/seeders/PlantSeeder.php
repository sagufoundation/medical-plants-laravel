<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plant = Plant::create([
            'id_location' => 1,
            'id_contributor' => 1,
            'cover_picture' => null,
            'local_name' => 'Daun Gatal',
            'taxonomists' => 'daun',
            'treatments' => 'daun',
            'status' => '1',
            'slug_plant' => 'daun-gatal',
        ]);

        $plant = Plant::create([
            'id_location' => 2,
            'id_contributor' => 2,
            'cover_picture' => null,
            'local_name' => 'Daun Pepaya',
            'taxonomists' => 'daun',
            'treatments' => 'daun',
            'status' => '1',
            'slug_plant' => 'daun-pepaya',
        ]);
    }
}
