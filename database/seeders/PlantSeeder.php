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
            'id_location' => 7,
            'id_regency' => 1,
            'id_contributor' => 1,
            'id_province' => 2,
            'cover_picture' => 'image-single.jpg',
            'gallery_picture' => 'image-gallery.jpg',
            'local_name' => 'Sample Local Name',
            'indonesian_name' => 'Sample Indonesian Name',
            'latin_name' => 'Sample <i>Latin</i> Name',

            'taxonomists' => 'Sample Taxonomists',
            'treatments' => 'Sample Treatments',
            'traditional_usage' => 'Sample traditional ussage',
            'known_phytochemical_consituents' => 'Known phytochemical consituents',

            'status' => 'Publish',
            'slug' => 'sample-local-name',
        ]);

        $plant = Plant::create([
            'id_location' => 7,
            'id_regency' => 2,
            'id_contributor' => 1,
            'id_province' => 2,
            'cover_picture' => 'image-single.jpg',
            'gallery_picture' => 'image-gallery.jpg',
            'local_name' => 'Sample Local Name 2',
            'indonesian_name' => 'Sample Indonesian Name 2',
            'latin_name' => 'Sample <i>Latin</i> Name 2',

            'taxonomists' => 'Sample Taxonomists 2',
            'treatments' => 'Sample Treatments 2',
            'traditional_usage' => 'Sample traditional ussage 2',
            'known_phytochemical_consituents' => 'Known phytochemical consituents 2',

            'status' => 'Publish',
            'slug' => 'sample-local-name-2',
        ]);

        $plant = Plant::create([
            'id_location' => 7,
            'id_regency' => 3,
            'id_contributor' => 1,
            'id_province' => 2,
            'cover_picture' => 'image-single.jpg',
            'gallery_picture' => 'image-gallery.jpg',
            'local_name' => 'Sample Local Name 3',
            'indonesian_name' => 'Sample Indonesian Name 3',
            'latin_name' => 'Sample <i>Latin</i> Name 3',

            'taxonomists' => 'Sample Taxonomists 3',
            'treatments' => 'Sample Treatments 3',
            'traditional_usage' => 'Sample traditional ussage 3',
            'known_phytochemical_consituents' => 'Known phytochemical consituents 3',

            'status' => 'Publish',
            'slug' => 'sample-local-name-3',
        ]);
        
        $plant = Plant::create([
            'id_location' => 3,
            'id_regency' => 6,
            'id_contributor' => 1,
            'id_province' => 1,
            'cover_picture' => 'anamyaum-single.jpg',
            'gallery_picture' => 'anamyaum-gallery.jpg',
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
            'id_regency' => 6,
            'id_contributor' => 1,
            'id_province' => 1,
            'cover_picture' => 'inasi-koi-single.jpg',
            'gallery_picture' => 'inasi-koi-gallery.jpg',
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
            'id_regency' => 6,
            'id_contributor' => 1,
            'id_province' => 1,
            'cover_picture' => 'krataweri-single.jpg',
            'gallery_picture' => 'krataweri-gallery.jpg',
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
    }
}
