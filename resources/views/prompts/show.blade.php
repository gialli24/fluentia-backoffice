@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 pb-4">
    <h1 class="fl-page-title">Prompts</h1>

    <a href="{{ route('prompts.edit', $prompt) }}" class="fl-btn primary">
        <i class="bi bi-pencil"></i>
        Modifica prompt
    </a>
</div>

@if ($prompt->thumbnail)
<img src="{{ asset('storage/'.$prompt->thumbnail) }}" alt="" class="fl-prompt-thumbnail">
@endif

<h5 class=" fl-prompt-title">{{ $prompt->title }}</h5>

<p class="fl-prompt-description">{{ $prompt->description }}</p>

<p class="fl-prompt-instructions">{{ $prompt->instructions }}</p>

<div class="fl-prompt-copy">
    <button class="btn btn-outline-primary" onclick="copyToClipboard()">
        <i class="bi bi-clipboard"></i> Copia prompt
    </button>


</div>

<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Prompt') }}
    </h2>

    <a href="{{ route('prompts.edit', $prompt) }}" class="btn btn-primary">Modifica</a>

    <form action="{{ route('prompts.destroy', $prompt) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger"
            onclick="return confirm('Are you sure you want to delete this prompt?')">Delete</button>
    </form>

    <div class="card {{ $prompt->is_featured ? '' : 'border-2 border-primary' }}">
        <img src="{{ asset('storage/'.$prompt->thumbnail) }}" class="card-img-top" alt="{{ $prompt->title }}">
        <div class="card-body">

            <div>
                @foreach ($prompt->ai_models as $prompt_ai_model)
                <span class="badge rounded-pill" style="background-color: {{ $prompt_ai_model->color }}">
                    {{ $prompt_ai_model->name }}
                </span>
                @endforeach
            </div>

            <div>
                @foreach ($prompt->categories as $prompt_category)
                <span class="badge rounded-pill text-bg-light">
                    <i class="bi bi-{{ $prompt_category->icon }}"></i> {{$prompt_category->name }}
                </span>
                @endforeach
            </div>

            <h5 class=" card-title">{{ $prompt->title }}</h5>

            <p class="card-text">{{ $prompt->content }}</p>

            <div>
                <h6>Instructions</h6>

                <p class="card-text">{{ $prompt->instructions }}</p>
            </div>
        </div>
        <div class="card-footer text-body-secondary">
            Output: {{ $prompt->output_type }}
            Uses: {{ $prompt->copy_count }}
        </div>
    </div>

</div>
@endsection