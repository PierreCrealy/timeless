<?php

namespace Database\Seeders;

use App\Models\Floor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Floor::factory()->create([
            'number' => 1,
            'name' => 'Nom étage 1',
            'theme_id' => 1,
        ]);

        Floor::factory()->create([
            'number' => 2,
            'name' => 'Nom étage 2',
            'theme_id' => 3,
        ]);

        Floor::factory()->create([
            'number' => 3,
            'name' => 'Nom étage 3',
            'theme_id' => 2,
        ]);
    }
}
