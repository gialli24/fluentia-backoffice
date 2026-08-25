<?php

use App\Http\Controllers\Api\AiModelController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PromptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::get('prompts', [PromptController::class, 'index']);
Route::get('prompts/{prompt}', [PromptController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index']);

Route::get('ai_models', [AiModelController::class, 'index']);