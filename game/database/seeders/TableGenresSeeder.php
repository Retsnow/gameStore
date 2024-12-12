<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'nom' => 'FPS'
            ],
            [
                'id' => 2,
                'nom' => 'Mode Histoire'
            ],
            [
                'id' => 3,
                'nom' => 'Course'
            ],
            [
                'id' => 4,
                'nom' => 'Multijoueur'
            ]

            ]);
            
    }
}
