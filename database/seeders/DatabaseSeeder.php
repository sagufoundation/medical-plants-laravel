<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SettingsSeeder::class,
            RoleSeeder::class,
            UsersSeeder::class,

            ContributorSeeder::class,
            IconSeeder::class,
            LocationSeeder::class,
            PlantSeeder::class,
            ProvincesSeeder::class,
            RegencySeeder::class,
        ]);
    }
}
