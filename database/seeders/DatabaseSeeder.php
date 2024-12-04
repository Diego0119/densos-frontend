<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\GalleryFactory;
use Illuminate\Database\Seeder;
use App\Models\Notice;
use App\Models\HighlightedNotice;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategoriesSeeder::class,
            AttributesSeeder::class,
            CategoryAttributeSeeder::class,
            RegionSeeder::class,
            CommuneSeeder::class,
            HighlightedSeeder::class,
            RoleSeeder::class,
        ]);
        User::factory(20)->create();
        Notice::factory(150)->create();
        User::factory()->admin()->create();
        HighlightedNotice::factory()->count(16)->create();
    }
}
