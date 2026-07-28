<?php

namespace Database\Seeders;

use App\Models\Comics;
use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class comicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comics::factory(60)->create();

        $genres = Genres::pluck('id');

        Comics::all()->each(function ($comic) use ($genres) {
            $comic->genres()->sync(
                $genres->random(rand(2, 5))->toArray()
            );
        });
    }
}
