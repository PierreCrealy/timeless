<?php

namespace Database\Seeders;

use App\Models\RegisterActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisterActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        RegisterActivity::factory(20)->create();
    }
}
