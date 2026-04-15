<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->word();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'posts_count' => fake()->numberBetween(0, 100)
        ];
    }

    public function popular(): static
    {
        return $this->state(fn (array $attributes) => [
            'posts_count' => fake()->numberBetween(200, 500)
        ]);
    }
}
