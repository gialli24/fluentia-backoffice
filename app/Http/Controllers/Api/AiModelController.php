<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AiModel;
use Illuminate\Http\Request;

class AiModelController extends Controller
{
    public function index()
    {
        $ai_models = AiModel::all();

        return response()->json([
            "success" => true,
            "data" => $ai_models
        ]);
    }
}
