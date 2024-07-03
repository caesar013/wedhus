<?php

namespace Database\Seeders;

use App\Models\SheepTreatment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SheepTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SheepTreatment::factory(2)->create();
    }
}
