<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
