@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Prompts') }}
    </h2>

    <a href="{{ route('prompts.create') }}" class="btn btn-primary">Add</a>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">

        @foreach ($prompts as $prompt)
        <div class="col">
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

                    <p class="card-text">{{ $prompt->description }}</p>

                    <a href="{{ route('prompts.show', $prompt->id) }}" class="btn btn-primary">Visualizza</a>
                </div>
                <div class="card-footer text-body-secondary">
                    Output: {{ $prompt->output_type }}
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection