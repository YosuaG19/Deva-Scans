<?php

namespace Database\Seeders;

use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Reactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comics::all()->each(function ($comic) {

            Reactions::factory(rand(80, 120))
                ->create([
                    'reactionable_id' => $comic->id,
                    'reactionable_type' => Comics::class,
                ]);

        });

        Chapters::all()->each(function ($chapter) {

            Reactions::factory(rand(50, 80))
                ->create([
                    'reactionable_id' => $chapter->id,
                    'reactionable_type' => Chapters::class,
                ]);

        });
    }
}
