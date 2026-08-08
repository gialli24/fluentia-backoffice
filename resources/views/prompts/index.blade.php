@extends('layouts.app')

@php
$path = [
['name' => 'Dashboard', 'url' => route('dashboard')],
['name' => 'Prompts', 'url' => route('prompts.index')]
];
@endphp


@section('content')

<x-app-header :path="$path" />

<div class="fl-app-content">

    <div class="d-flex justify-content-between align-items-center mb-4 pb-4">
        <h1 class="fl-page-title">Prompts</h1>

        <a href="{{ route('prompts.create') }}" class="fl-btn primary">
            <i class="bi bi-plus-lg"></i>
            Aggiungi nuovo prompt
        </a>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($prompts->split(3) as $chunk)

        <div class="col">

            @foreach ($chunk as $prompt)
            <x-card>
                <x-slot:class>
                    {{ $prompt->is_featured ? '' : 'border border-primary' }} {{ $loop->last ? '' : 'mb-4' }}
                </x-slot:class>
                <div class="d-flex flex-wrap gap-2">
                    @foreach ($prompt->ai_models as $ai_model)
                    <x-badge>
                        <x-slot:color>{{ $ai_model->color }}</x-slot:color>
                        {{ $ai_model->name }}
                    </x-badge>
                    @endforeach

                    @foreach ($prompt->categories as $category)
                    <x-badge>
                        <x-slot:icon>{{ $category->icon }}</x-slot:icon>
                        {{ $category->name }}
                    </x-badge>
                    @endforeach
                </div>

                <h4 class="fl-card-title">{{ $prompt->title }}</h4>

                @if ($prompt->thumbnail)
                <img src="{{ asset('storage/'.$prompt->thumbnail) }}" alt="">
                @endif

                <p class="fl-card-description">{{ $prompt->description }}</p>

                <a href="{{ route('prompts.show', $prompt->id) }}" class="fl-btn sm outline">Visualizza</a>

                <hr class="divisor">

                <div class="meta d-flex align-items-center justify-content-between">
                    <span>output: {{ $prompt->output_type }}</span>
                    <span>
                        <i class="bi bi-caret-down-fill"></i>
                        {{ $prompt->copy_count }}
                    </span>
                </div>
            </x-card>
            @endforeach

        </div>

        @endforeach
    </div>
</div>

@endsection