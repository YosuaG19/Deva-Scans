<?php

namespace Database\Factories;

use App\Models\Panels;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Panels>
 */
class PanelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'img_path' => fake()->randomElement([
                'panels/panel1.jpg',
                'panels/panel2.jpg',
                'panels/panel3.jpg',
            ])
        ];
    }
}
