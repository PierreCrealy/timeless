<?php

namespace Database\Seeders;

use App\Models\DishComposition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishCompositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DishComposition::factory(30)->create();
    }
}
