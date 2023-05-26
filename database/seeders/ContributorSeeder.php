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
            'status_contributor' => 'Publish',
            'slug' => 'tirsha-rumbewas'
        ]);


        $contributor = Contributor::create([
            'full_name' => 'Samuel Bosawer',
            'email' => 'samuel@gmail.com',
            'address' => 'Maribu',
            'city' => 'Kab Jayapura',
            'province' => 'Papua',
            'descriptions' => '',
            'photo' => '/assets/img/team/team-samuel-bosawer.png',
            'status_contributor' => 'Publish',
            'slug' => 'samuel-bosawer'
        ]);


        $contributor = Contributor::create([
            'full_name' => 'Janzen Faidiban',
            'email' => 'janzen@gmail.com',
            'address' => 'Maribu',
            'city' => 'Kab Jayapura',
            'province' => 'Papua',
            'descriptions' => '',
            'photo' => '/assets/img/team/team-janzen-faidiban.png',
            'status_contributor' => 'Publish',
            'slug' => 'janzen-faidiban'
        ]);


        $contributor = Contributor::create([
            'full_name' => 'Jimmy Wanma',
            'email' => 'jimmy@gmail.com',
            'address' => 'Maribu',
            'city' => 'Kab Jayapura',
            'province' => 'Papua',
            'descriptions' => '',
            'photo' => '/assets/img/team/team-jimmy-wanma.png',
            'status_contributor' => 'Publish',
            'slug' => 'jimmy-wanma'
        ]);
    }
}
