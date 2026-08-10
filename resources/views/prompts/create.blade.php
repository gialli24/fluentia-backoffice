@extends('layouts.app')

@php
$path = [
['name' => 'Dashboard', 'url' => route('dashboard')],
['name' => 'Prompt', 'url' => route('prompts.index')],
['name' => 'Nuovo Prompt', 'url' => route('prompts.create')]
];
@endphp

@section('content')

<x-app-header :path="$path" />

<div class="fl-app-content">

    <div class="d-flex justify-content-between align-items-center mb-4 pb-4">
        <h1 class="fl-page-title">Prompts</h1>

        <a href="{{ route('prompts.index') }}" class="fl-link">
            <i class="bi bi-arrow-left"></i>
            Torna indietro
        </a>

    </div>

    <form method="POST" action="{{ route('prompts.store') }}" class="fl-auth-form mb-4" enctype="multipart/form-data">

        @csrf

        <x-form-field>
            <x-slot:label>Thumbnail</x-slot:label>
            <x-slot:type>file</x-slot:type>
            <x-slot:id>thumbnail</x-slot:id>
            <x-slot:name>thumbnail</x-slot:name>
            <x-slot:placeholder>fluentia@mail.com</x-slot:placeholder>
        </x-form-field>

        <div class="fl-field">
            <label for="">Categories</label>
        </div>
        <div class="d-flex flex-wrap gap-2">
            @foreach ($categories as $category)
            <x-form-checkbox>
                <x-slot:icon>{{ $category->icon }}</x-slot:icon>
                <x-slot:label>{{ $category->name }}</x-slot:label>
                <x-slot:id>category-{{ $category->id }}</x-slot:id>
                <x-slot:name>categories[]</x-slot:name>
                <x-slot:value>{{ $category->id }}</x-slot:value>
            </x-form-checkbox>
            @endforeach
        </div>

        <div class="fl-field">
            <label for="">Modelli Ai</label>
        </div>
        <div class="d-flex flex-wrap gap-2">
            @foreach ($ai_models as $ai_model)
            <x-form-checkbox>
                <x-slot:color>{{ $ai_model->color }}</x-slot:color>
                <x-slot:label>{{ $ai_model->name }}</x-slot:label>
                <x-slot:id>ai_model-{{ $ai_model->id }}</x-slot:id>
                <x-slot:name>ai_models[]</x-slot:name>
                <x-slot:value>{{ $ai_model->id }}</x-slot:value>
            </x-form-checkbox>
            @endforeach
        </div>

        <x-form-field>
            <x-slot:label>Titolo</x-slot:label>
            <x-slot:type>text</x-slot:type>
            <x-slot:id>title</x-slot:id>
            <x-slot:name>title</x-slot:name>
            <x-slot:placeholder>Come funziona l'Ai</x-slot:placeholder>
        </x-form-field>

        <x-form-text-area>
            <x-slot:label>Descrizione</x-slot:label>
            <x-slot:id>description</x-slot:id>
            <x-slot:name>description</x-slot:name>
            <x-slot:placeholder>Scrivi una breve descrizione del prompt</x-slot:placeholder>
        </x-form-text-area>

        <x-form-text-area>
            <x-slot:label>Contenuto</x-slot:label>
            <x-slot:id>content</x-slot:id>
            <x-slot:name>content</x-slot:name>
            <x-slot:placeholder>Scrivi il contenuto del prompt</x-slot:placeholder>
        </x-form-text-area>

        <x-form-text-area>
            <x-slot:label>Istruzioni</x-slot:label>
            <x-slot:id>instructions</x-slot:id>
            <x-slot:name>instructions</x-slot:name>
            <x-slot:placeholder>Scrivi le istruzioni del prompt</x-slot:placeholder>
        </x-form-text-area>

        <x-form-select>
            <x-slot:label>Output Type</x-slot:label>
            <x-slot:id>output_type</x-slot:id>
            <x-slot:name>output_type</x-slot:name>
            <option value="text">Text</option>
            <option value="image">Image</option>
            <option value="json">Json</option>
            <option value="html">Html</option>
        </x-form-select>

        <x-form-text-area>
            <x-slot:label>Output Content</x-slot:label>
            <x-slot:id>output_content</x-slot:id>
            <x-slot:name>output_content</x-slot:name>
            <x-slot:placeholder>Scrivi il contenuto dell'output del prompt</x-slot:placeholder>
        </x-form-text-area>

        <x-form-checkbox>
            <x-slot:label>Is Featured</x-slot:label>
            <x-slot:id>is_featured</x-slot:id>
            <x-slot:name>is_featured</x-slot:name>
            <x-slot:value>1</x-slot:value>
        </x-form-checkbox>

        <button type="submit" class="fl-btn primary w-100 mt-4">
            Aggiungi Prompt <i class="bi bi-plus"></i>
        </button>
    </form>

</div>
@endsection