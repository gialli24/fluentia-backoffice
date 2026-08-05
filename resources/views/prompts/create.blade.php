@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Prompt') }}
    </h2>

    <form action="{{ route('prompts.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="thumbnail" class="form-label">Prompt Thumbnail</label>
            <input type="text" class="form-control" id="thumbnail" name="thumbnail" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Prompt Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <h5>Categories</h5>

            @foreach ($categories as $category)
            <span class="me-4">
                <input type="checkbox" id="category-{{ $category->id }}" name="categories[]"
                    value="{{ $category->id }}">
                <label for="category-{{ $category->id }}">{{ $category->name }}</label>
            </span>
            @endforeach
        </div>

        <div class="mb-3">
            <h5>Ai Models</h5>

            @foreach ($ai_models as $ai_model)
            <span class="me-4">
                <input type="checkbox" id="ai_model-{{ $ai_model->id }}" name="ai_models[]" value="{{ $ai_model->id }}">
                <label for="ai_model-{{ $ai_model->id }}">{{ $ai_model->name }}</label>
            </span>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Prompt Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Prompt Content</label>
            <textarea class="form-control" id="content" name="content" required></textarea>
        </div>

        <div class="mb-3">
            <label for="instructions" class="form-label">Prompt Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" required></textarea>
        </div>

        <div class="mb-3">
            <label for="output_type" class="form-label">Prompt Output Type</label>
            <select class="form-control" name="output_type" id="output_type">
                <option value="text" selected>Text</option>
                <option value="image">Image</option>
                <option value="json">Json</option>
                <option value="html">Html</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="output_content" class="form-label">Prompt Output Content</label>
            <textarea class="form-control" id="output_content" name="output_content" required></textarea>
        </div>

        <div class="mb-3">
            <input type="checkbox" name="is_featured" id="is_featured">
            <label for="is_featured" class="form-label">Is Featured</label>
        </div>

        <button type="submit" class="btn btn-primary">Add Prompt</button>

    </form>

</div>
@endsection