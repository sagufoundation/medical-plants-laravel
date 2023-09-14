<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourPackages;

class TourPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourPackages::create([
            'title' => 'Tour Package 1',
            'slug' => 'tour-package-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
            'picture' => 'images/tour_packages/01.png',
            'status' => 'Publish',
            'user_id' => '1',
        ]);

        TourPackages::create([
            'title' => 'Tour Package 2',
            'slug' => 'tour-package-2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
            'picture' => 'images/tour_packages/02.png',
            'status' => 'Publish',
            'user_id' => '1',
        ]);

        TourPackages::create([
            'title' => 'Tour Package 3',
            'slug' => 'tour-package-3',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!',
            'picture' => 'images/tour_packages/03.png',
            'status' => 'Draft',
            'user_id' => '1',
        ]);
    }
}
