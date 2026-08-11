<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Prompt;
use Illuminate\Http\Request;

class PromptController extends Controller
{
    public function index() {
        $prompts = Prompt::with(['ai_models', 'categories'])->get();

        return response()->json([
            "success" => true,
            "data" => $prompts
        ]);
    }

    public function show(Prompt $prompt)
    {
        $prompt->load(['ai_models', 'categories']);

        return response()->json([
            "success" => true,
            "data" => $prompt
        ]);
    }
}
