<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@itsolutionstuff.com',
                'type' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@itsolutionstuff.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
