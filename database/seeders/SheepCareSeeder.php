<?php

namespace Database\Seeders;

use App\Models\SheepCare;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SheepCareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SheepCare::factory(9)->create();
    }
}
