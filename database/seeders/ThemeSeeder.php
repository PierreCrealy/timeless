<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Theme::factory()->create([
            'title' => 'Futuriste',
            'description' => '...',
        ]);

        Theme::factory()->create([
            'title' => 'Moyenne Age',
            'description' => '...',
        ]);

        Theme::factory()->create([
            'title' => 'Année 20',
            'description' => '...',
        ]);
    }
}
