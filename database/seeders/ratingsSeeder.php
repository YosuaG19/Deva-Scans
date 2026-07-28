<?php

namespace Database\Seeders;

use App\Models\Comics;
use App\Models\Ratings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ratingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comics::all()->each(function ($comic){

            Ratings::factory(rand(50,100))->create([
                'comic_id'=>$comic->id,
            ]);

        });
    }
}
