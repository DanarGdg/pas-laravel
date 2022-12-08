<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class LecturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'courses_id' => mt_rand(1, 10),
            'name' => fake()->name(),
            'educational_stage' => fake()->word(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
