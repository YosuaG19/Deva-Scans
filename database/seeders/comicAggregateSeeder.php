<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class comicAggregateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comics::all()->each(function ($comic) {

            $comic->update([

                'chapter_count' =>
                    $comic->chapters()->count(),

                'bookmarks_count' =>
                    $comic->bookmarks()->count(),

                'rating_count' =>
                    $comic->ratings()->count(),

                'rating_avg' =>
                    round($comic->ratings()->avg('rate') ?? 0, 1),

                'last_chapter_at' =>
                    $comic->chapters()
                        ->latest('created_at')
                        ->value('created_at'),

            ]);

        });
    }
}
