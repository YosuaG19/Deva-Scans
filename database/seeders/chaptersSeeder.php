<?php

namespace Database\Seeders;

use App\Models\Chapters;
use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Comics::all()->each(function ($comic) {
            $chapterCount = rand(20, 50);
            $date = $comic->created_at->copy();

            foreach (range(1, $chapterCount) as $number) {

                $date->addDays(rand(2, 7));

                Chapters::factory()->create([
                    'comic_id'   => $comic->id,
                    'numbering'  => $number,
                    'created_at' => $date->copy(),
                ]);
            }
        });
    }
}
