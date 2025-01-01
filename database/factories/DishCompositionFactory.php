<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DishComposition>
 */
class DishCompositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dish_id' => fake()->numberBetween(1, 9),
            'ingredient_id' => fake()->numberBetween(1, 40),
        ];
    }
}
