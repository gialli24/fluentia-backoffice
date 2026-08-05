<?php

namespace Database\Seeders;

use App\Models\AiModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AiModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ai_models = config('ai_models');

        foreach($ai_models as $ai_model) {
            $newAiModel = new AiModel();

            $newAiModel->name = $ai_model['name'];
            $newAiModel->color = $ai_model['color'];

            $newAiModel->save();
        }
    }
}
