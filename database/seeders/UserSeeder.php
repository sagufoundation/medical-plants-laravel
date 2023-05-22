<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com')
        ]);

        $admin->assignRole('admin');




        $contributor = User::create([
            'name' => 'Contributor',
            'email' => 'contributor@gmail.com',
            'password' => bcrypt('contributor@gmail.com')
        ]);
        $contributor->assignRole('contributor');

        $contributor = User::create([
            'name' => 'johan',
            'email' => 'johan@gmail.com',
            'password' => bcrypt('johan@gmail.com')
        ]);
        $contributor->assignRole('contributor');

        $contributor = User::create([
            'name' => 'maikel',
            'email' => 'maikel@gmail.com',
            'password' => bcrypt('maikel@gmail.com')
        ]);
        $contributor->assignRole('contributor');





        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user@gmail.com')
        ]);
        $user->assignRole('user');
    }
}
