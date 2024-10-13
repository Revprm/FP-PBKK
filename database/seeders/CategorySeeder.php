<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'TV/Monitors',
            'slug' => 'tv-monitors',
        ]);
        Category::create([
            'name' => 'PC',
            'slug' => 'pc',
        ]);
        Category::create([
            'name' => 'Gaming/Console',
            'slug' => 'gaming-console',
        ]);
        Category::create([
            'name' => 'Phones',
            'slug' => 'phones',
        ]);
    }
}
