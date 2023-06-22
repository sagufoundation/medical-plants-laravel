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
            'cover_picture' => 'seeds/plants/anamyaum-20230622060731.jpg',
            'gallery_picture' => 'seeds/plants/anamyaum-20230622060731-gallery.jpg',
            'local_name' => 'Anamyaum',
            'taxonomists' => 'Alstonia scholaris (L.) R.Br.',
            'treatments' => '-',
            'status' => 'Publish',
            'slug_plant' => 'anamyaum',
        ]);



        $plant = Plant::create([
            'id_location' => 3,
            'id_contributor' => 3,
            'cover_picture' => 'seeds/plants/inasi-koi-20230622060721.jpg',
            'gallery_picture' => 'seeds/plants/inasi-koi-20230622060721-gallery.jpg',
            'local_name' => 'Inasi Koi',
            'taxonomists' => 'Scaevola Taccada (Gaertn.) Roxb.',
            'treatments' => '-',
            'status' => 'Publish',
            'slug_plant' => 'inasi-koi',
        ]);

        $plant = Plant::create([
            'id_location' => 3,
            'id_contributor' => 1,
            'cover_picture' => 'seeds/plants/krataweri-20230622060508.jpg',
            'gallery_picture' => 'seeds/plants/krataweri-20230622060704-gallery.jpg',
            'local_name' => 'Krataweri',
            'taxonomists' => 'Artocarpus vriesianus Miq.',
            'treatments' => '-',
            'status' => 'Publish',
            'slug_plant' => 'krataweri',
        ]);

        $plant = Plant::create([
            'id_location' => 7,
            'id_contributor' => 1,
            'cover_picture' => '/assets/img/plants/00.jpg',
            'gallery_picture' => '/assets/img/plants/gallery/00.jpg',
            'local_name' => 'Lorem, ipsum.',
            'taxonomists' => 'Lorem ipsum dolor sit.',
            'treatments' => '-',
            'status' => '1',
        ]);



    }
}
