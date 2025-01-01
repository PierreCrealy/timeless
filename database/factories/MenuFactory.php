<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'theme' => fake()->numberBetween(0, 2),
            'description' => fake()->text(),
            'price' => fake()->randomNumber(2),
            'status' => fake()->text(),
        ];
    }
}
