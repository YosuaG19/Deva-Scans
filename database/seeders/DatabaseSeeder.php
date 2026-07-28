<?php

namespace Database\Seeders;

use App\Models\Comics;
use App\Models\Genres;
use App\Models\Sorts;
use App\Models\Status;
use App\Models\Types;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();

        $genres = [
            'Action',
            'Adventure',
            'Comedy',
            'Drama',
            'Fantasy',
            'Romance',
            'Sci-Fi',
            'Horror',
            'Mystery',
            'Slice of Life',
        ];

        foreach ($genres as $genre){
            Genres::create(['name' => $genre]);
        }

        $sorts = [
            'Latest Update',
            'Popular',
            'Rating',
            'A-Z',
            'Newest',
        ];

        foreach ($sorts as $sort){
            Sorts::create(['name' => $sort]);
        }

        $status = [
            'All',
            'Ongoing',
            'Completed',
            'Hiatus',
            'Axed',
        ];

        foreach ($status as $state){
            Status::create(['name' => $state]);
        }

        $types = [
            'All',
            'Manhwa',
            'Manga',
            'Manhua',
            'Created',
        ];

        foreach ($types as $type){
            Types::create(['name' => $type]);
        }

        Comics::factory(60)->create();

        $genres = Genres::pluck('id');

        Comics::all()->each(function ($comic) use ($genres) {
            $comic->genres()->sync(
                $genres->random(rand(2, 5))->toArray()
            );
        });
    }
}
