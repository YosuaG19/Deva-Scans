<?php

namespace Database\Seeders;

use App\Models\Sorts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sortsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
