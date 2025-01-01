<?php

namespace Database\Seeders;

use App\Models\OrderComposition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderCompositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderComposition::factory(15)->create();
    }
}
