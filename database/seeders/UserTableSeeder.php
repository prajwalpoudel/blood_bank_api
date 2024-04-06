<?php

namespace Database\Seeders;

use App\Models\RegUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'username' => 'admin',
                'accountType' => 'Admin'
            ]
        ];
        foreach($users as $user) {
            RegUser::create($user);
        }
    }
}
