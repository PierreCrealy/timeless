<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'lastname' => 'Admin',
            'firstname' => 'User',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole('Admin');

        // -----
        $customer = User::factory()->create([
            'lastname' => 'Customer',
            'firstname' => 'User',
            'email' => 'customer@example.com',
        ]);
        $customer->assignRole('Customer');

        // -----
        $employee = User::factory()->create([
            'lastname' => 'Employee',
            'firstname' => 'User',
            'email' => 'employee@example.com',
        ]);
        $employee->assignRole('Employee');

        // -----
        User::factory(10)->create();
    }
}
