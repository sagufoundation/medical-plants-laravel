<?php

namespace Database\Seeders;

use App\Models\Plant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plant = Plant::create([
            'id_location' => 3,
            'id_contributor' => 1,
            'id_province' => 1,
            'cover_picture' => 'seeds/plants/anamyaum-20230622060731.jpg',
            'gallery_picture' => 'seeds/plants/anamyaum-20230622060731-gallery.jpg',
            'local_name' => 'Anamyaum',
            'indonesian_name' => '-',
            'latin_name' => '<i>Alstonia scholaris</i> (L.) R.Br.',

            'taxonomists' => 'JW, VS',
            'treatments' => '-',
            'traditional_usage' => '-',
            'known_phytochemical_consituents' => '-',

            'status' => 'Publish',
            'slug' => 'anamyaum',
        ]);



        $plant = Plant::create([
            'id_location' => 3,
            'id_contributor' => 1,
            'id_province' => 1,
            'cover_picture' => 'seeds/plants/inasi-koi-20230622060721.jpg',
            'gallery_picture' => 'seeds/plants/inasi-koi-20230622060721-gallery.jpg',
            'local_name' => 'Inasi Koi',
            'indonesian_name' => '-',
            'latin_name' => '<i>Scaevola Taccada</i> (Gaertn.) Roxb.',

            'taxonomists' => 'JW, VS',
            'treatments' => '-',
            'traditional_usage' => '-',
            'known_phytochemical_consituents' => '-',

            'status' => 'Publish',
            'slug' => 'inasi-koi',
        ]);

        $plant = Plant::create([
            'id_location' => 3,
            'id_contributor' => 1,
            'id_province' => 1,
            'cover_picture' => 'seeds/plants/krataweri-20230622060508.jpg',
            'gallery_picture' => 'seeds/plants/krataweri-20230622060704-gallery.jpg',
            'local_name' => 'Krataweri',
            'indonesian_name' => '-',
            'latin_name' => '<i>Artocarpus vriesianus</i> Miq.',

            'taxonomists' => 'JW, VS',
            'treatments' => '-',
            'traditional_usage' => '-',
            'known_phytochemical_consituents' => '-',

            'status' => 'Publish',
            'slug' => 'krataweri',
        ]);

        $plant = Plant::create([
            'id_location' => 7,
            'id_contributor' => 3,
            'id_province' => 2,
            'cover_picture' => '/assets/img/plants/00.jpg',
            'gallery_picture' => '/assets/img/plants/gallery/00.jpg',
            'local_name' => 'Lorem, ipsum.',
            'indonesian_name' => '',
            'latin_name' => '',

            'taxonomists' => 'Lorem ipsum dolor sit.',
            'treatments' => '-',
            'traditional_usage' => '-',
            'known_phytochemical_consituents' => '-',

            'status' => 'Publish',
            'slug' => 'lorem-ipsum',
        ]);
    }
}
