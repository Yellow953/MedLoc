<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'test',
            'last_name' => 'test',
            'phone' => '89675',
            'gender' => 'male',
            'address' => 'test address',
            'dob' => now(),
            'email' => 'test@test.com',
            'role' => 'admin',
            'password' => Hash::make('qwe123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
