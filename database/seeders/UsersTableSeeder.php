<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'team_id'        => null,
                'team_admin'     => false,
            ],
            [
                'id'             => 2,
                'name'           => 'Team Admin',
                'email'          => 'teamadmin@teamadmin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'team_id'        => 1,
                'team_admin'     => true,
            ],
            [
                'id'             => 3,
                'name'           => 'User',
                'email'          => 'user@user.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'team_id'        => 1,
                'team_admin'     => false,
            ],
        ];

        User::insert($users);

    }
}
