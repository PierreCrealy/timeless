<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reference' => 'FAC'.fake()->numberBetween(0, 10000),
            'price' => fake()->randomNumber(2),
            'pay_date' => fake()->dateTime(),
            'pay_method' => fake()->numberBetween(0, 2),
        ];
    }
}
