<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contributor;

class ContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contributor = Contributor::create([
            'full_name' => ' Tisha Rumbewas',
            'email' => 'tisha@gmail.com',
            'address' => '-',
            'city' => 'Kab Jayapura',
            'province' => 'Papua',
            'descriptions' => '',
            'photo' => '/assets/img/team/team-tisha-rumbewas.png',
            'status_contributor' => '1',
            'slug' => 'johan'
        ]);

        $contributor = Contributor::create([
            'full_name' => 'johan',
            'email' => 'johan@gmail.com',
            'address' => 'Maribu',
            'city' => 'Kab Jayapura',
            'province' => 'Papua',
            'descriptions' => '',
            'photo' => '',
            'status_contributor' => '1',
            'slug' => 'johan'
        ]);


        $contributor = Contributor::create([
            'full_name' => 'maikel',
            'email' => 'maikel@gmail.com',
            'address' => 'Maribu',
            'city' => 'Kab Jayapura',
            'province' => 'Papua',
            'descriptions' => '',
            'photo' => '',
            'status_contributor' => '1',
            'slug' => 'maikel'
        ]);
    }
}
