<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
