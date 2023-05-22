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
            'icon_name' => 'tag merah',
            'icon_img' => '',
        ]);

        $icon = Icon::create([
            'icon_name' => 'tag daun',
            'icon_img' => '',
        ]);
    }
}
