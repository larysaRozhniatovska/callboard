<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'login' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
        User::insert([
            'login' => 'user1',
            'email' => 'user1@user.com',
            'password' => Hash::make('user1'),
        ]);
        User::insert([
            'login' => 'user2',
            'email' => 'user2@user.com',
            'password' => Hash::make('user2'),
        ]);
    }
}
