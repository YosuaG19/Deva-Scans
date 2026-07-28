<?php

namespace Database\Seeders;

use App\Models\Chapters;
use App\Models\Panels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class panelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chapters::all()->each(function ($chapter) {
            foreach (range(1, rand(10, 25)) as $page) {
                Panels::factory()->create([
                    'chapter_id' => $chapter->id,
                    'page_number' => $page,
                ]);
            }
        });
    }
}
