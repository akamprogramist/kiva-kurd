<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
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
            'description' => fake()->paragraph(5),
        ];
    }
}
