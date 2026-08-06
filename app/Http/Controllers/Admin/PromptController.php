<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AiModel;
use App\Models\Category;
use App\Models\Prompt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prompts = Prompt::all();

        return view('prompts.index', compact('prompts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $ai_models = AiModel::all();

        return view('prompts.create', compact('categories', 'ai_models'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newPrompt = new Prompt();

        $newPrompt->title = $data['title'];
        $newPrompt->description = $data['description'];
        $newPrompt->content = $data['content'];
        $newPrompt->instructions = $data['instructions'];
        $newPrompt->output_type = $data['output_type'];
        $newPrompt->output_content = $data['output_content'];
        $newPrompt->is_featured = isset($data['is_featured']) ? 1 : 0;

        if (array_key_exists("thumbnail", $data)) {
            $img_url = Storage::putFile('uploads', $data['thumbnail']);

            $newPrompt->thumbnail = $img_url;
        }

        $newPrompt->save();

        if($request->has('ai_models')) {
            $newPrompt->ai_models()->attach($data['ai_models']);
        }

        if($request->has('categories')) {
            $newPrompt->categories()->attach($data['categories']);
        }

        return redirect()->route('prompts.show', $newPrompt);
    }

    /**
     * Display the specified resource.
     */
    public function show(Prompt $prompt)
    {
        return view('prompts.show', compact('prompt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prompt $prompt)
    {

        $categories = Category::all();
        $ai_models = AiModel::all();

        return view('prompts.edit', compact('prompt', 'categories', 'ai_models'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prompt $prompt)
    {
        $data = $request->all();

        $prompt->title = $data['title'];
        $prompt->description = $data['description'];
        $prompt->content = $data['content'];
        $prompt->instructions = $data['instructions'];
        $prompt->output_type = $data['output_type'];
        $prompt->output_content = $data['output_content'];
        $prompt->is_featured = $data['is_featured'] ? 1 : 0;

        if (array_key_exists("thumbnail", $data)) {

            Storage::delete($prompt->thumbnail);

            $img_url = Storage::putFile('uploads', $data['thumbnail']);

            $prompt->thumbnail = $img_url;
        }

        $prompt->update();

        if ($request->has('categories')) {
            $prompt->categories()->sync($data['categories']);
        } else {
            $prompt->categories()->detach();
        }
        
        if ($request->has('ai_models')) {
            $prompt->ai_models()->sync($data['ai_models']);
        } else {
            $prompt->ai_models()->detach();
        }

        return redirect()->route('prompts.show', $prompt);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prompt $prompt)
    {
        if($prompt->thumbnail) {
            Storage::delete($prompt->thumbnail);
        }

        $prompt->delete();

        return redirect()->route('prompts.index');
    }
}
