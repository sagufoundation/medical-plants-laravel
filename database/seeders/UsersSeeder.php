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
                'name' => 'Admin GOTRAV',
                'slug' => 'admin-gotrav',
                'job_title' => 'Administrator on www.gotravpapua.com',
                'picture' => 'images/users/00.jpg',
                'email' => 'admin@gotravpapua.com',
                'password' => bcrypt('admin@gotravpapua.com'),
                'status' => 'Publish',
                'role' => 'administrator',

            ],
            [
                'name' => 'Guest GOTRAV',
                'slug' => 'guset-gotrav',
                'job_title' => 'Guest User on www.gotravpapua.com',
                'picture' => 'images/users/00.jpg',
                'email' => 'guest@gotravpapua.com',
                'password' => bcrypt('guest@gotravpapua.com'),
                'status' => 'Publish',
                'role' => 'guest',

            ]
        ]);

        $users->map(function ($user) {
            $user = collect($user);
            $newUser = User::create($user->except('role')->toArray());
            $newUser->assignRole($user['role']);
        });
    }
}
