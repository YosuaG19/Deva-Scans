<?php

namespace Database\Seeders;

use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Comments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comics::all()->each(function ($comic) {
            $date = $comic->created_at->copy();
            $comic->comments()
                ->saveMany(
                    Comments::factory(rand(10, 80))->make()
                )
                ->each(function ($comment) use (&$date) {
                    $date->addHours(rand(2, 24));
                    $comment->update([
                        'created_at' => $date->copy(),
                    ]);
                });
        });

        Chapters::all()->each(function ($chapter) {
            $date = $chapter->created_at->copy();
            $chapter->comments()
                ->saveMany(
                    Comments::factory(rand(10, 20))->make()
                )
                ->each(function ($comment) use ($date){
                    $date->addHours(rand(2, 24));
                    $comment->update([
                        'created_at' => $date->copy(),
                    ]);
                });
        });
    }
}
