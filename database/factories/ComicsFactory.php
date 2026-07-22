<?php

namespace Database\Factories;

use App\Models\Comics;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comics>
 */
class ComicsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence(3);
        return [
            "title" => $title,
            "slug" => Str::slug($title),
            "desc" => fake()->paragraph(20),
            "cover_path" => fake()->randomElement([
                'cover-1',
                'cover-2',
                'cover-3',
                'cover-4',
                'cover-5',
                'cover-6',
                'cover-7',
                'cover-8'
            ]),
            "author" => fake()->name(),
            "artist" => fake()->name(),
            "type_id" => fake()->numberBetween(2, 5),
            "status_id" => fake()->numberBetween(1, 5),
            "upt_day" => fake()->randomElement([
                'sun',
                'mon',
                'tue',
                'wed',
                'thu',
                'fri',
                'sat'
            ]),
            'created_at' => fake()->dateTimeBetween('-36 months', 'now')
        ];
    }
}
