<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->lastName(),
            'number' => fake()->numberBetween(1,10),
            'capacity' => fake()->numberBetween(1,5),
            'price' => fake()->numberBetween(50,150),
            'status' => fake()->boolean(),

            'floor_id' => fake()->numberBetween(1,3),
        ];
    }
}
