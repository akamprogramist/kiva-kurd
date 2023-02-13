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
            'name' => fake()->name(),
            'department' => fake()->sentence(),
            'location' => fake()->city(),
            'employees' => fake()->numberBetween(1, 20),
            'products' => fake()->numberBetween(1, 50),
            'clients' => fake()->numberBetween(1, 20),
            'money' => fake()->numberBetween(500, 900),
            'description' => fake()->paragraph(5),
        ];
    }
}
