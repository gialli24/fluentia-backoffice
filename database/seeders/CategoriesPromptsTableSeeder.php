<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Prompt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesPromptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all()->pluck('id')->toArray();

        Prompt::all()->each(function(Prompt $prompt) use ($categories) {
            $prompt->categories()->sync(
                collect($categories)->random(rand(1, 3))->toArray()
            );
        });
    }
}
