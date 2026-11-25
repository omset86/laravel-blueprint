<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'password' => fake()->password(),
            'role' => fake()->regexify('[A-Za-z0-9]{20}'),
            'bio' => fake()->text(),
            'avatar_path' => fake()->word(),
        ];
    }
}
