<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourDestinations;

class TourDestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourDestinations::create([
            'title' => 'Tour Destination 1',
            'slug' => 'tour-destination-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);

         TourDestinations::create([
            'title' => 'Tour Destination 1',
            'slug' => 'tour-destination-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_destinations/ww01.png' ,
            'status' => 'Publish' ,
            'user_id' => '1' ,

         ]);
    }
}
