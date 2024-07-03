<?php

namespace Database\Seeders;

use App\Models\Sheep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SheepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Sheep::factory(11)->create();
    }
}
