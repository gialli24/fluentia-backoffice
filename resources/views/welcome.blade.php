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
                    <button class="btn brand">Accedi al backoffice <i class="bi bi-arrow-right"></i></button>
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

                <div class="fl-card">
                    <div class="fl-badge">
                        <div class="dot" style="background-color: #7BCCFF"></div>
                        Gemini
                    </div>

                    <h4 class="fl-card-title">Riassunto executive</h4>

                    <p class="fl-card-description">Condensa report lunghi in tre punti chiave per il management.</p>

                    <hr class="divisor">

                    <div class="meta d-flex align-items-center justify-content-between">
                        <span>output: text</span>
                        <span>
                            <i class="bi bi-caret-down-fill"></i>
                            15
                        </span>
                    </div>
                </div>

                <div class="fl-card">
                    <div class="fl-badge">
                        <div class="dot" style="background-color: #FFB640"></div>
                        Claude 3.5
                    </div>

                    <h4 class="fl-card-title">Palette UI da moodboard</h4>

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfAXHHBVXWDR8HoeEJ_7z-D3-xjJdyrSxz1GRQRRNQXNugEjbsLfET0UE4&s=10"
                        alt="">

                    <p class="fl-card-description">Genera una palette accessibile a partire da tre immagini di
                        riferimento.</p>

                    <hr class="divisor">

                    <div class="meta d-flex align-items-center justify-content-between">
                        <span>output: image</span>
                        <span>
                            <i class="bi bi-caret-down-fill"></i>
                            15
                        </span>
                    </div>
                </div>

                <div class="fl-card">
                    <div class="fl-badge">
                        <div class="dot" style="background-color: #30A449"></div>
                        ChatGPT
                    </div>

                    <h4 class="fl-card-title">Palette UI da moodboard</h4>

                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfAXHHBVXWDR8HoeEJ_7z-D3-xjJdyrSxz1GRQRRNQXNugEjbsLfET0UE4&s=10"
                        alt="">

                    <p class="fl-card-description">Genera una palette accessibile a partire da tre immagini di
                        riferimento.</p>

                    <hr class="divisor">

                    <div class="meta d-flex align-items-center justify-content-between">
                        <span>output: image</span>
                        <span>
                            <i class="bi bi-caret-down-fill"></i>
                            15
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection