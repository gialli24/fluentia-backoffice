<?php

namespace Database\Seeders;

use App\Models\AiModel;
use App\Models\Prompt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AiModelsPromptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ai_models = AiModel::all()->pluck('id')->toArray();

        Prompt::all()->each(function (Prompt $prompt) use ($ai_models) {
            $prompt->ai_models()->sync(
                collect($ai_models)->random(rand(1, 2))->toArray()
            );
        });
    }
}
