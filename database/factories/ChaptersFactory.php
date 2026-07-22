<?php

namespace Database\Factories;

use App\Models\Chapters;
use App\Models\Comics;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Chapters>
 */
class ChaptersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                '',
                fake()->sentence(rand(1,5))
            ])
        ];
    }
}
