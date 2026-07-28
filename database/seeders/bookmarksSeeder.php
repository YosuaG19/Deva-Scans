<?php

namespace Database\Seeders;

use App\Models\Bookmarks;
use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookmarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comics::all()->each(function ($comic){

            Bookmarks::factory(rand(50,100))->create([
                'comic_id'=>$comic->id,
            ]);

        });
    }
}
