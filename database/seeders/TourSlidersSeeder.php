<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourSliders;

class TourSlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourSliders::create([
            'user_id' => 1,
            'title' => 'Slider 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_sliders/01.png',
            'status' => 'Publish',
            'slug' => 'slider-1'
         ]);

         TourSliders::create([
            'user_id' => 1,
            'title' => 'Slider 2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_sliders/02.png',
            'status' => 'Publish',
            'slug' => 'slider-2'
         ]);

         TourSliders::create([
            'user_id' => 1,
            'title' => 'Slider 3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!' ,
            'picture' => 'images/tour_sliders/03.png',
            'status' => 'Draft',
            'slug' => 'slider-3'
         ]);

    }
}
