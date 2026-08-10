@extends('layouts.app')

@php
$path = [
['name' => 'Dashboard', 'url' => route('dashboard')],
['name' => 'Modelli Ai', 'url' => route('ai-models.index')],
['name' => $ai_model->name, 'url' => route('ai-models.create')]
];
@endphp

@section('content')

<x-app-header :path="$path" />

<div class="fl-app-content">

    <div class="d-flex justify-content-between align-items-center mb-4 pb-4">
        <h1 class="fl-page-title">Modifica modello Ai</h1>

        <a href="{{ route('ai-models.index') }}" class="fl-link">
            <i class="bi bi-arrow-left"></i>
            Torna indietro
        </a>
    </div>

    <form method="POST" action="{{ route('ai-models.update', $ai_model) }}" class="fl-auth-form mb-4"
        enctype="multipart/form-data">

        @csrf

        @method('PUT')

        <x-form-field>
            <x-slot:label>Nome</x-slot:label>
            <x-slot:type>text</x-slot:type>
            <x-slot:id>name</x-slot:id>
            <x-slot:name>name</x-slot:name>
            <x-slot:placeholder>CopyWriting</x-slot:placeholder>
            <x-slot:value>{{ old('name', $ai_model->name) }}</x-slot:value>
        </x-form-field>

        <x-form-field>
            <x-slot:label>Colore</x-slot:label>
            <x-slot:type>color</x-slot:type>
            <x-slot:id>color</x-slot:id>
            <x-slot:name>color</x-slot:name>
            <x-slot:placeholder>plus</x-slot:placeholder>
            <x-slot:value>{{ old('color', $ai_model->color) }}</x-slot:value>
        </x-form-field>

        <button type="submit" class="fl-btn primary w-100 mt-4">
            Aggiorna modello Ai <i class="bi bi-arrow-repeat"></i>
        </button>
    </form>
</div>
@endsection