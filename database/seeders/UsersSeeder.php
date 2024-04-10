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
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin@gmail.com'),
                'picture' => '00.png',
                'status' => 'Publish',
                'role' => 'admin',

            ],
            [
                'name' => 'Contributor',
                'email' => 'contributor@gmail.com',
                'password' => bcrypt('contributor@gmail.com'),
                'picture' => '00.png',
                'status' => 'Publish',
                'role' => 'contributor',
            ],
            [
                'name' => 'Samuel',
                'email' => 'samuel@gmail.com',
                'password' => bcrypt('samuel@gmail.com'),
                'picture' => '00.png',
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
