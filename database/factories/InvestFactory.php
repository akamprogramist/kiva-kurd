<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invest>
 */
class InvestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'title' => fake()->sentence(),
            'location' => fake()->city(),
            'shares' => fake()->numberBetween(10, 50),
            'money' => fake()->numberBetween(500, 900),
            'description' => fake()->paragraph(5),
        ];
    }
}
