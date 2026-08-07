@extends('layouts.auth')

@section('content')
<div class="row row-cols-1 row-cols-lg-2 g-0">
    <div class="col">
        <div class="fl-hero auth d-none d-lg-block">

            <img src="{{ asset('img/logo.svg') }}" alt="Fluentia" class="fl-logo">

            <div class="fl-eyebrow">
                Backoffice
            </div>

            <h1 class="fl-hero-title">
                L'archivio prompt
                <span class="fl-text-gradient brand italic">curato bene</span>
                comincia da qui.
            </h1>

            <p class="fl-hero-text">
                Registrati per gestire prompt, categorie e modelli AI. Ogni modifica pubblicata qui è visibile
                immediatamente
                sul catalogo di Fluentia.
            </p>

            <x-card>
                <x-slot:style>max-width: 300px;</x-slot:style>
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

                <p class="fl-card-description">{{ $prompt->description }}</p>

                <hr class="divisor">

                <div class="meta d-flex align-items-center justify-content-between">
                    <span>output: {{ $prompt->output_type }}</span>
                    <span>
                        <i class="bi bi-caret-down-fill"></i>
                        {{ $prompt->copy_count }}
                    </span>
                </div>
            </x-card>
        </div>
        <!-- /.fl-hero -->
    </div>
    <div class="col">
        <div class="fl-form-panel">
            <div class="fl-form-container">
                <div class="fl-form-head mb-4">
                    <img src="{{ asset('img/logo.svg') }}" alt="Fluentia" class="fl-logo d-lg-none mb-4">
                    <div class="kicker">Accesso riservato</div>
                    <h2>Benvenuta/o.</h2>
                    <p>Registra un nuovo account per continuare.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="fl-auth-form mb-4">

                    @csrf

                    <x-form-field>
                        <x-slot:icon>person</x-slot:icon>
                        <x-slot:label>Nome</x-slot:label>
                        <x-slot:type>text</x-slot:type>
                        <x-slot:autocomplete>name</x-slot:autocomplete>
                        <x-slot:id>name</x-slot:id>
                        <x-slot:name>name</x-slot:name>
                        <x-slot:placeholder>Mario Rossi</x-slot:placeholder>

                        @error('name')
                        <span class="fl-field-help invalid" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </x-form-field>

                    <x-form-field>
                        <x-slot:icon>envelope</x-slot:icon>
                        <x-slot:label>Email</x-slot:label>
                        <x-slot:type>email</x-slot:type>
                        <x-slot:autocomplete>email</x-slot:autocomplete>
                        <x-slot:id>email</x-slot:id>
                        <x-slot:name>email</x-slot:name>
                        <x-slot:placeholder>fluentia@mail.com</x-slot:placeholder>

                        @error('email')
                        <span class="fl-field-help invalid" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </x-form-field>

                    <x-form-field>
                        <x-slot:icon>lock</x-slot:icon>
                        <x-slot:label>Password</x-slot:label>
                        <x-slot:type>password</x-slot:type>
                        <x-slot:autocomplete>new-password</x-slot:autocomplete>
                        <x-slot:id>password</x-slot:id>
                        <x-slot:name>password</x-slot:name>
                        <x-slot:placeholder>********</x-slot:placeholder>

                        @error('password')
                        <span class="fl-field-help invalid" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </x-form-field>

                    <x-form-field>
                        <x-slot:icon>lock</x-slot:icon>
                        <x-slot:label>Conferma password</x-slot:label>
                        <x-slot:type>password</x-slot:type>
                        <x-slot:autocomplete>new-password</x-slot:autocomplete>
                        <x-slot:id>password-confirm</x-slot:id>
                        <x-slot:name>password_confirmation</x-slot:name>
                        <x-slot:placeholder>********</x-slot:placeholder>

                        @error('password')
                        <span class="fl-field-help invalid" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </x-form-field>

                    <button type="submit" class="fl-btn primary w-100">
                        Registrati al backoffice <i class="bi bi-arrow-right"></i>
                    </button>
                </form>

                <a href="{{ route('login') }}" class="fl-link sm center">Hai già un account? Accedi</a>

                <div class="fl-divider">oppure</div>

                <a href="{{ route('index') }}" class="fl-link sm center"> <i class="bi bi-arrow-left"></i> Torna alla
                    Home</a>

                <div class="form-foot-note">
                    Accesso riservato agli amministratori Fluentia.<br>
                    Problemi di accesso? Contatta il team tecnico.
                </div>
            </div>

        </div>
    </div>
</div>
@endsection