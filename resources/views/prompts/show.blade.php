@extends('layouts.app')

@php
$path = [
['name' => 'Dashboard', 'url' => route('dashboard')],
['name' => 'Prompts', 'url' => route('prompts.index')],
['name' => $prompt->title, 'url' => route('prompts.show', $prompt)],
];
@endphp


@section('content')

<x-app-header :path="$path" />

<div class="fl-app-content">

    <a href="{{ route('prompts.index') }}" class="fl-link mb-4">
        <i class="bi bi-arrow-left"></i>
        Torna indietro
    </a>

    <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
        <h1 class="fl-page-title">{{ $prompt->title }}</h1>

        <div class="d-flex gap-2">
            {{-- Delete --}}
            <form action="{{ route('prompts.destroy', $prompt) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="fl-btn sm"
                    onclick="return confirm('Are you sure you want to delete this prompt?')"><i
                        class="bi bi-trash"></i></button>
            </form>

            <a href="{{ route('prompts.edit', $prompt) }}" class="fl-btn sm primary">
                <i class="bi bi-pencil me-2"></i>
                Modifica
            </a>
        </div>
    </div>

    <div class="d-flex flex-wrap gap-2 mb-4">
        @foreach ($prompt->categories as $category)
        <x-badge>
            <x-slot:icon>{{ $category->icon }}</x-slot:icon>
            {{ $category->name }}
        </x-badge>
        @endforeach

        @foreach ($prompt->ai_models as $ai_model)
        <x-badge>
            <x-slot:color>{{ $ai_model->color }}</x-slot:co>
                {{ $ai_model->name }}
        </x-badge>
        @endforeach

        <x-badge>
            output: {{ $prompt->output_type }}
        </x-badge>

        @if (!$prompt->is_featured)
        <x-badge>
            <x-slot:class>primary</x-slot:class>
            <x-slot:icon>star-fill</x-slot:icon>
            In evidenza
        </x-badge>
        @endif
    </div>


    <div class="row g-4 mt-4">

        <div class="col-12 col-xxl-8">
            <x-card>
                <x-slot:class>mb-4</x-slot:class>
                <h5 class="fl-card-title-ibm">Descrizione</h5>
                <p>{{ $prompt->description }}</p>
            </x-card>

            <div class="fl-prompt-card mb-4">
                <div class="fl-card-header">
                    <h5 class="fl-card-title">Prompt pronto da copiare</h5>

                    <button data-content='@json($prompt->content)' onclick="copyToClipboard(this, this.dataset.content)"
                        class="fl-btn sm ">
                        <i class="bi bi-clipboard"></i>
                        Copia
                    </button>
                </div>
                <div class="fl-card-body">
                    {!! nl2br(e($prompt->content)) !!}
                </div>
                <div class="fl-card-footer">
                    Output atteso: {{ $prompt->output_type }}
                </div>
            </div>

            <x-card>
                <x-slot:class>mb-4</x-slot:class>
                <h5 class="fl-card-title-ibm">Istruzioni d'uso</h5>
                <p>{!! nl2br(e($prompt->instructions)) !!}</p>
            </x-card>

            <x-card>
                <x-slot:class>mb-4</x-slot:class>
                <h5 class="fl-card-title-ibm">Esempio di Output</h5>
                <p class="fl-prompt-output">
                    {!! nl2br(e($prompt->output_content)) !!}
                </p>
            </x-card>
        </div>

        <div class="col-12 col-xxl-4">

            <x-card>
                <x-slot:class>mb-4</x-slot:class>
                <h5 class="fl-card-title-ibm">Thumbnail</h5>
                <img src="{{ asset('storage/'.$prompt->thumbnail) }}">
                <a href="{{ route('prompts.show', $prompt) }}" class="fl-btn sm d-flex justify-content-center">
                    <i class="bi bi-box-arrow-up-right me-2"></i>
                    Vedi pagina pubblica
                </a>
            </x-card>

            <x-card>
                <x-slot:class>mb-4</x-slot:class>
                <h5 class="fl-card-title-ibm">Dettagli</h5>

                <div class="d-flex flex-column gap-0">
                    <div class="fl-meta-row d-flex justify-content-between gap-4">
                        <label>Categorie</label>
                        <span>{{ $prompt->categories->pluck('name')->implode(', ') }}</span>
                    </div>

                    <div class="fl-meta-row d-flex justify-content-between gap-4">
                        <label>Modelli Ai</label>
                        <span>{{ $prompt->ai_models->pluck('name')->implode(', ') }}</span>
                    </div>

                    <div class="fl-meta-row d-flex justify-content-between">
                        <label>Output</label>
                        <span>{{ $prompt->output_type }}</span>
                    </div>

                    <div class="fl-meta-row d-flex justify-content-between">
                        <label>Copie effettuate</label>
                        <span>{{ $prompt->copy_count }}</span>
                    </div>
                </div>

            </x-card>

            <x-card>
                <x-slot:class>mb-2</x-slot:class>
                <h5 class="fl-card-title-ibm">Cronologia</h5>

                <div class="d-flex flex-column gap-0">
                    <div class="fl-meta-row d-flex justify-content-between">
                        <label>Creazione</label>
                        <span>{{ $prompt->created_at->format('d/m/Y H:i') }}</span>
                    </div>

                    <div class="fl-meta-row d-flex justify-content-between">
                        <label>Ultima modifica</label>
                        <span>{{ $prompt->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>

            </x-card>

        </div>

    </div>
</div>
@endsection