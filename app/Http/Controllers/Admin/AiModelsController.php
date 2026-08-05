<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AiModel;
use Illuminate\Http\Request;

class AiModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ai_models = AiModel::all();

        return view('ai_models.index', compact('ai_models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ai_models.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newAiModel = new AiModel();

        $newAiModel->name = $data['name'];
        $newAiModel->color = $data['color'];

        $newAiModel->save();

        return redirect()->route('ai-models.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AiModel $ai_model)
    {
        return view('ai_models.edit', compact('ai_model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AiModel $ai_model)
    {
        $data = $request->all();

        $ai_model->name = $data['name'];
        $ai_model->color = $data['color'];

        $ai_model->update();

        return redirect()->route('ai-models.index');
    }
        
        /**
         * Remove the specified resource from storage.
        */
    public function destroy(AiModel $ai_model)
    {
        $ai_model->delete();

        return redirect()->route('ai-models.index');
    }
}
