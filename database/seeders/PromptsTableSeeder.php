<?php

namespace Database\Seeders;

use App\Models\Prompt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class PromptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $output_types = ['text', 'json', 'html', 'image'];

        for ($i=0; $i < 10; $i++) { 
            $newPrompt = new Prompt();

            $newPrompt->title = $faker->sentence(3);
            $newPrompt->description = $faker->paragraph();
            $newPrompt->content = $faker->paragraph();
            $newPrompt->instructions = $faker->paragraph();
            $newPrompt->output_type = $output_types[rand(0,3)];
            $newPrompt->output_content = $faker->paragraph();
            $newPrompt->thumbnail = 'https://img.magnific.com/premium-photo/innovative-female-humanoid-android-with-advanced-ai-system-blue-orange-tones-concept-technology-androids-artificial-intelligence-female-characters-futuristic-aesthetics_918839-114677.jpg?semt=ais_hybrid&w=740&q=80';
            $newPrompt->copy_count = rand(1,100);
            $newPrompt->is_featured = rand(0,1);

            $newPrompt->save();
        }
    }
}
