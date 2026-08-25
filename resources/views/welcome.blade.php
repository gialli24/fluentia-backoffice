@extends('layouts.guest')

@section('content')
<div class="bg-light"></div>

<div class="container">
    <div class="row row-cols-1 row-cols-xl-2">
        <div class="col">

            <div class="fl-hero">

                <div class="fl-eyebrow">
                    Pannello di Amministrazione
                </div>

                <h1 class="fl-hero-title">L'archivio prompt di Fluentia,
                    <span class="fl-text-gradient brand italic">
                        curato da chi lo conosce.
                    </span>
                </h1>

                <p class="fl-hero-text">
                    Da qui il team cura ogni voce del catalogo: prompt, categorie e modelli AI collegati. Ciò che viene
                    pubblicato in questo
                    pannello è esattamente ciò che gli utenti trovano su Fluentia.
                </p>

                <div class="d-flex align-items-center gap-4">

                    <a href="{{ route('login') }}" class="fl-btn primary">
                        Accedi al backoffice <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="http://localhost:5173/prompts" class="fl-link">Esplora il catalogo pubblico</a>

                </div>

                <hr class="fl-divisor">

                <div class="d-flex gap-4">

                    @foreach ($data as $el)
                    <div class="fl-stat-card">
                        <h4 class="fl-stat-card-title">{{ $el['count'] }}</h4>
                        <span class="fl-stat-card-text">{{ $el['text'] }}</span>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- /.fl-hero -->

        </div>
        <div class="col d-none d-xl-inline">

            <div class="fl-stack-wrap">
                @foreach ($prompts as $prompt)
                <x-card>
                    <x-slot:class>w-100</x-slot:class>
                    <x-slot:style>min-width: 300px;</x-slot:style>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach ($prompt->ai_models as $ai_model)
                        <x-badge>
                            <x-slot:color>{{ $ai_model->color }}</x-slot:color>
                            {{ $ai_model->name }}
                        </x-badge>
                        @endforeach
                    </div>

                    <h4 class="fl-card-title">{{ $prompt->title }}</h4>

                    @if ($prompt->thumbnail)
                    <img src="{{ asset('storage/'.$prompt->thumbnail) }}" alt="">
                    @endif

                    <p class="fl-card-description">{{ substr($prompt->description, 0, 30) }}</p>

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

        </div>
    </div>
</div>
@endsection