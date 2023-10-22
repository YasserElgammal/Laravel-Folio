<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $slug = str($title)->slug();
        return [
            'title' => $title,
            'slug' => $slug,
            'content' => fake()->paragraph(),
            'category_id' => fake()->numberBetween(1, 10),
        ];
    }
}
