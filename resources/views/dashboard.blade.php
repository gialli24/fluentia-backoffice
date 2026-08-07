@extends('layouts.app')

@section('content')

<div class="row g-4">

    <div class="col-12 col-xxl-8">

        <div class="fl-hero">

            <div class="fl-eyebrow">
                Bentornata/o
            </div>

            <h1 class="fl-hero-title">
                Ciao {{ Auth::user()->name }},
                <span class="fl-text-gradient brand">ecco l'archivio di oggi.</span>
            </h1>

            <p class="fl-hero-text">
                Da qui puoi gestire prompt, categorie e modelli AI. Ogni modifica pubblicata qui è visibile
                immediatamente sul catalogo di Fluentia.
            </p>

        </div>
        <!-- /.fl-hero -->

        <x-card>
            <x-slot:class>w-100</x-slot:class>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fl-card-title m-0">Prompt recenti</h5>
                <a href="{{ route('prompts.index') }}" class="fl-link sm">
                    Vedi tutti <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            @foreach ($prompts as $prompt)
            <x-data-row :prompt=$prompt />
            @endforeach

        </x-card>

    </div>

    <div class="col-12 col-xxl-4">
        <x-card>
            <x-slot:class>w-100</x-slot:class>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fl-card-title m-0">Azioni rapide</h5>
            </div>

            <div class="d-flex flex-column gap-3">

                <a href="{{ route('prompts.create') }}" class="fl-cta">
                    <x-badge>
                        <x-slot:class>square primary</x-slot:class>
                        <x-slot:icon>plus</x-slot:icon>
                    </x-badge>

                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="fl-cta-title">Nuovo prompt</h5>
                        <p class="fl-cta-text">Crea e pubblica una nuova voce</p>
                    </div>
                </a>

                <a href="{{ route('categories.create') }}" class="fl-cta">
                    <x-badge>
                        <x-slot:class>square</x-slot:class>
                        <x-slot:icon>folder2</x-slot:icon>
                    </x-badge>

                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="fl-cta-title">Nuova categoria</h5>
                        <p class="fl-cta-text">Crea e pubblica una nuova categoria</p>
                    </div>
                </a>

                <a href="{{ route('ai-models.create') }}" class="fl-cta">
                    <x-badge>
                        <x-slot:class>square</x-slot:class>
                        <x-slot:icon>cpu</x-slot:icon>
                    </x-badge>

                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="fl-cta-title">Nuovo modello AI</h5>
                        <p class="fl-cta-text">Crea e pubblica un nuovo modello AI</p>
                    </div>
                </a>
            </div>
        </x-card>

        <div class="row g-2 mt-4">
            @foreach ($data as $el)
            <div class="col {{ $loop->first ? 'col-12' : '' }}">

                <x-card>
                    <div class="fl-stat-card">
                        <h4 class="fl-stat-card-title {{ $loop->first ? 'fl-text-gradient brand' : '' }}">{{
                            $el['count'] }}</h4>
                        <span class="fl-stat-card-text">{{ $el['text'] }}</span>
                    </div>
                </x-card>

            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection