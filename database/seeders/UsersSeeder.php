<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin@gmail.com'),
                'status' => 'Publish',
                'role' => 'admin',

            ],
            [
                'name' => 'Contributor',
                'email' => 'contributor@gmail.com',
                'password' => bcrypt('contributor@gmail.com'),
                'status' => 'Publish',
                'role' => 'contributor',
            ],
            [
                'name' => 'Johan',
                'email' => 'johan@gmail.com',
                'password' => bcrypt('johan@gmail.com'),
                'status' => 'Publish',
                'role' => 'contributor',
            ],
            [
                'name' => 'Maikel',
                'email' => 'maikel@gmail.com',
                'password' => bcrypt('maikel@gmail.com'),
                'role' => 'contributor',
            ]
        ]);

        $users->map(function ($user) {
            $user = collect($user);
            $newUser = User::create($user->except('role')->toArray());
            $newUser->assignRole($user['role']);
        });
    }
}
