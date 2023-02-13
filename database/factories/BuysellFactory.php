<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buysell>
 */
class BuysellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'location' => fake()->city(),
            'money' => fake()->numberBetween(500, 900),
            'description' => fake()->paragraph(5),
        ];
    }
}
