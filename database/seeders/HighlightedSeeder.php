<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HighlightedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Default',
                'slug' => 'default',
            ],
            [
                'name' => 'Impulsar',
                'slug' => 'impulsar',
            ],
            [
                'name' => 'Galería',
                'slug' => 'galería',
            ],
        ];

        DB::table('highlighteds')->insert($data);
    }
}
