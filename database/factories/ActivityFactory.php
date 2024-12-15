<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(50),
            'start_datetime' => fake()->dateTime(),
            'capacity' => fake()->numberBetween(5,25),
            'price' => fake()->numberBetween(5,15),

            'type_id' => fake()->numberBetween(1,5),
            'theme_id' => fake()->numberBetween(1,3),
        ];
    }
}
