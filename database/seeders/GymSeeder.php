<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Gym::factory()
        ->count(20)
        ->create();

    }
}
