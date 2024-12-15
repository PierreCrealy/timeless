<?php

namespace Database\Seeders;

use App\Models\Floor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            RolesAndPermissionsSeeder::class,
            UserSeeder::class,

            ThemeSeeder::class,
            FloorSeeder::class,
            RoomSeeder::class,
            ReservationSeeder::class,

            TypeActivitySeeder::class,
            ServiceSeeder::class,
            ActivitySeeder::class,

            RegisterActivitySeeder::class,
            ReservationRoomSeeder::class,
            BookServiceSeeder::class,


        ]);

    }
}
