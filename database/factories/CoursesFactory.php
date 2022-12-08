<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lectures_id' => mt_rand(1, 5),
            'courses_name' => fake()->sentence(mt_rand(1, 2)),
            'chapter' => mt_rand(1, 50),
            'harga' => fake()->randomFloat(2, 0, 500),
            'release' => now()
        ];
    }
    
}
