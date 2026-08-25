@extends('layouts.guest')

@section('content')
<div class="bg-light"></div>

<div class="container">

    <div class="fl-eyebrow">Page Not Found</div>

    <h1 class="fl-error-title">Errore
        <span class="fl-text-gradient brand italic">404</span>
    </h1>

    <p class="fl-error-text">
        L'indirizzo che cerchi non esiste o non è più disponibile. Torna all'inizio e riprendi da lì.
    </p>

    <div class="d-flex flex-wrap align-items-center gap-4">
        <a href="{{ route('index') }}" class="fl-btn primary">
            Torna alla home <i class="bi bi-arrow-right"></i>
        </a>

        <a href="http://localhost:5173/prompts" class="fl-link">
            Esplora il catalogo pubblico <i class="bi bi-box-arrow-up-right"></i>
        </a>
    </div>

</div>
@endsection