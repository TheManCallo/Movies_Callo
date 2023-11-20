<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class MovieFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'category' => fake()->word,
            'isbn' => fake()->isbn13,
            'description' => fake()->paragraph,
            'movie_image' => fake()->imageUrl,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
