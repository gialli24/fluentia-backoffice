<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $categories = config('categories');

        foreach ($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category['name'];
            $newCategory->icon = $category['icon'];

            $newCategory->save();
        }

    }
}
