<?php

namespace Database\Seeders;

use App\Models\Foldtype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoldtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Foldtype::factory(3)->create();
    }
}
