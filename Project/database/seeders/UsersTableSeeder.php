<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Talha',
                'email' => 'Talha@gmail.com',
                'email_verified_at' => '2023-08-21 15:12:47',
                'image' => 'https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg',
                'password' => Hash::make('Admin12345.'),
                'role' => 1,
                'created_at' => '2023-08-14 15:12:47',
                'updated_at' => '2023-08-23 15:12:47',
            ],
            [
                'name' => 'User',
                'email' => 'User@gmail.com',
                'email_verified_at' => '2023-08-14 15:12:47',
                'image' => "no Image",
                'password' => Hash::make('User'),
                'role' => 2,
                'created_at' => '2023-08-14 15:12:47',
                'updated_at' => '2023-08-23 15:12:47',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
