<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class genresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
