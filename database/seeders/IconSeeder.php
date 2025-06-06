<?php

namespace Database\Seeders;

use App\Models\Icon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icon = Icon::create([
            'icon_name' => 'Daun Merah',
            'icon_img' => '/assets/img/icon/daun-merah-pin.png',
             'status' => 'Publish',
        ]);


        $icon = Icon::create([
            'icon_name' => 'Bendera Hijau',
            'icon_img' => '/assets/img/icon/green-flag.png',
             'status' => 'Publish',
        ]);

        $icon = Icon::create([
            'icon_name' => 'Bendera Merah',
            'icon_img' => '/assets/img/icon/red-flag.png',
             'status' => 'Publish',
        ]);

        $icon = Icon::create([
            'icon_name' => 'Pohon',
            'icon_img' => '/assets/img/icon/pohon-pin.png',
             'status' => 'Publish',
        ]);

    }
}
