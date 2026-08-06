@extends('layouts.guest')

@section('content')
<div class="bg-light"></div>

<div class="container">
    <div class="row row-cols-1 row-cols-xl-2">
        <div class="col">

            <div class="welcome-hero">
                <div class="eyebrow">
                    Pannello di Amministrazione
                </div>

                <h1>L'archivio prompt di Fluentia, <span>curato da chi lo conosce.</span></h1>

                <p>
                    Da qui il team cura ogni voce del catalogo: prompt, categorie e modelli AI collegati. Ciò che viene
                    pubblicato in questo
                    pannello è esattamente ciò che gli utenti trovano su Fluentia.
                </p>

                <div class="d-flex align-items-center gap-4">

                    <a href="{{ route('login') }}" class="btn brand">
                        Accedi al backoffice <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="#" class="link">Esplora il catalogo pubblico</a>

                </div>

                <hr class="divisor">

                <div class="d-flex gap-4">

                    @foreach ($data as $el)
                    <div class="stat">
                        <h4>{{ $el['count'] }}</h4>
                        <span>{{ $el['text'] }}</span>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- /.welcome-hero -->

        </div>
        <div class="col d-none d-xl-inline">
            <div class="stack-wrap">

                @foreach ($prompts as $prompt)
                <x-card :prompt="$prompt" />
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection