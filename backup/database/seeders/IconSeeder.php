<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Icon;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $icon = Icon::create([
            'icon_name' => 'Daun Merah',
            'icon_img' => '/assets/img/icon/daun-merah-pin.png',
        ]);


        $icon = Icon::create([
            'icon_name' => 'Bendera Hijau',
            'icon_img' => '/assets/img/icon/green-flag.png',
        ]);

        $icon = Icon::create([
            'icon_name' => 'Bendera Merah',
            'icon_img' => '/assets/img/icon/red-flag.png',
        ]);

        $icon = Icon::create([
            'icon_name' => 'Pohon',
            'icon_img' => '/assets/img/icon/pohon-pin.png',
        ]);


    }
}
