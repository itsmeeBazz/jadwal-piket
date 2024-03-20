<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Guru',
                'email' => 'guru@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'guru'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
