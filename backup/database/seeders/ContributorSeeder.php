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
        Contributor::create([
            'full_name'             => 'Tisha Rumbewas',
            'slug'                  => 'tisha-rumbewas',
            'email'                 => 't.rumbewas@gmail.com',
            'address'               => 'Jalan Raya...,',
            'city'                  => 'Kota Jayapura',
            'province'              => 'Papua Province',
            'descriptions'          => '',
            'photo'                 => '/assets/img/team/team-tisha-rumbewas.png',
            'status_contributor'    => 'Publish',
        ]);

        Contributor::create([
            'full_name'             => 'Jimmy Wanma',
            'slug'                  => 'jimmy-wanma',
            'email'                 => 'j.wanma@gmail.com',
            'address'               => 'Jalan Raya...,',
            'city'                  => 'Manokwari',
            'province'              => 'West Papua Province',
            'descriptions'          => '',
            'photo'                 => '/assets/img/team/team-jimmy-wanma.png',
            'status_contributor'    => 'Publish',
        ]);

        Contributor::create([
            'full_name'             => 'Janzen Faidiban',
            'slug'                  => 'janzen-faidiban',
            'email'                 => 'janzen.faidiban@gmail.com',
            'address'               => 'Jalan Raya...,',
            'city'                  => 'Kota Jayapura',
            'province'              => 'Papua',
            'descriptions'          => '',
            'photo'                 => '/assets/img/team/team-janzen-faidiban.png',
            'status_contributor'    => 'Publish',
        ]);

        Contributor::create([
            'full_name'             => 'Samuel Bosawer',
            'slug'                  => 'samuel-bosawer',
            'email'                 => 's.bosawer@gmail.com',
            'address'               => 'Jalan Raya...,',
            'city'                  => 'Kabupaten Jayapura',
            'province'              => 'Papua',
            'descriptions'          => '',
            'photo'                 => '/assets/img/team/team-samuel-bosawer.png',
            'status_contributor'    => 'Publish',
        ]);

        Contributor::create([
            'full_name'             => 'Johan Nasendi',
            'slug'                  => 'johan-nasendi',
            'email'                 => 'j.nasendi@gmail.com',
            'address'               => 'Jalan Raya...,',
            'city'                  => 'Kabupaten Jayapura',
            'province'              => 'Papua',
            'descriptions'          => '',
            'photo'                 => '/assets/img/team/team-johan-nasendi.png',
            'status_contributor'    => 'Publish',
        ]);

        Contributor::create([
            'full_name'             => 'Obi Pranata',
            'slug'                  => 'obi-pranata',
            'email'                 => 'o.pranata@gmail.com',
            'address'               => 'Jalan Raya...,',
            'city'                  => 'Kabupaten Jayapura',
            'province'              => 'Papua',
            'descriptions'          => '',
            'photo'                 => '/assets/img/team/team-default.png',
            'status_contributor'    => 'Publish',
        ]);
    }
}
