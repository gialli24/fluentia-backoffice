<?php

namespace App\Http\Controllers;

use App\Models\AiModel;
use App\Models\Category;
use App\Models\Prompt;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {

        $prompts_number = Prompt::count('*');
        $categories_number = Category::count('*');
        $ai_models_number = AiModel::count('*');

        $prompts = Prompt::take(3)->get();

        $data = [
            [
                "count" => $prompts_number,
                "text" => "prompt caricati"
            ],
            [
                "count" => $categories_number,
                "text" => "categorie"
            ],
            [
                "count" => $ai_models_number,
                "text" => "modelli ai"
            ]
        ];

        return view('welcome', compact('data', 'prompts'));
    }
}
