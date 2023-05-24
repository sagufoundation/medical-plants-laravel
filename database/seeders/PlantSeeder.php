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
            'id_location' => 3,
            'id_contributor' => 1,
            'cover_picture' => '/assets/img/plants/plant-kurudu-anamyaum.jpg',
            'local_name' => 'Anamyaum',
            'taxonomists' => 'Alstonia scholaris (L.) R.Br.',
            'treatments' => '-',
            'status' => '1',
            'slug_plant' => 'anamyaum',
        ]);



        $plant = Plant::create([
            'id_location' => 3,
            'id_contributor' => 1,
            'cover_picture' => '/assets/img/plants/plant-kurudu-inasi-koi.jpg',
            'local_name' => 'Inasi Koi',
            'taxonomists' => 'Scaevola Taccada (Gaertn.) Roxb.',
            'treatments' => '-',
            'status' => '1',
            'slug_plant' => 'inasi-koi',
        ]);

        $plant = Plant::create([
            'id_location' => 3,
            'id_contributor' => 1,
            'cover_picture' => '/assets/img/plants/plant-kurudu-krataweri.jpg',
            'local_name' => 'Krataweri',
            'taxonomists' => 'Artocarpus vriesianus Miq.',
            'treatments' => '-',
            'status' => '1',
            'slug_plant' => 'krataweri',
        ]);


    }
}
