<?php

use App\Http\Controllers\Admin\AiModelsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PromptController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('index');

Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("/categories", CategoryController::class)/* ->middleware(['auth']) */;
Route::resource("/ai-models", AiModelsController::class)/* ->middleware(['auth']) */;
Route::resource("/prompts", PromptController::class)->name('get', 'prompts')/* ->middleware(['auth']) */;


require __DIR__.'/auth.php';
