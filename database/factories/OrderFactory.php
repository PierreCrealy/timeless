<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->numberBetween(0, 2),

            'table_id' => fake()->numberBetween(1, 25),
            'room_id' => fake()->numberBetween(1, 60),
            'bill_id' => fake()->numberBetween(1, 10),
        ];
    }
}
