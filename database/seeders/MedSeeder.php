<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('meds')->insert([
            'name' => 'medication 1',
            'type' => 'antibiotic',
            'description' => 'this medication is an antibiotic...',
            'image' => 'assets/images/Profile.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
