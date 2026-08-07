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
            $newPrompt->description = $faker->paragraph(10);
            $newPrompt->content = $faker->paragraph(10);
            $newPrompt->instructions = $faker->paragraph(5);
            $newPrompt->output_type = $output_types[rand(0,3)];
            $newPrompt->output_content = $faker->paragraph(5);
            $newPrompt->thumbnail = 'uploads/7bk2irHNxWzHUmeiteo7shw9oHh6MgvrE2WMLfrs.jpg';
            $newPrompt->copy_count = rand(1,100);
            $newPrompt->is_featured = rand(0,1);

            $newPrompt->save();
        }
    }
}
