@extends('layouts.app')

@php
$path = [
['name' => 'Dashboard', 'url' => route('dashboard')],
['name' => 'Categorie', 'url' => route('categories.index')],
['name' => 'Nuova Categoria', 'url' => route('categories.create')]
];
@endphp

@section('content')

<x-app-header :path="$path" />

<div class="fl-app-content">

    <div class="d-flex justify-content-between align-items-center mb-4 pb-4">
        <h1 class="fl-page-title">Nuova categoria</h1>

        <a href="{{ route('categories.index') }}" class="fl-link">
            <i class="bi bi-arrow-left"></i>
            Torna indietro
        </a>
    </div>

    <form method="POST" action="{{ route('categories.store') }}" class="fl-auth-form mb-4"
        enctype="multipart/form-data">

        @csrf

        <x-form-field>
            <x-slot:label>Nome</x-slot:label>
            <x-slot:type>text</x-slot:type>
            <x-slot:id>name</x-slot:id>
            <x-slot:name>name</x-slot:name>
            <x-slot:placeholder>CopyWriting</x-slot:placeholder>
        </x-form-field>

        <x-form-field>
            <x-slot:label>Icona</x-slot:label>
            <x-slot:type>text</x-slot:type>
            <x-slot:id>icon</x-slot:id>
            <x-slot:name>icon</x-slot:name>
            <x-slot:placeholder>plus</x-slot:placeholder>
        </x-form-field>

        <button type="submit" class="fl-btn primary w-100 mt-4">
            Aggiungi Categoria <i class="bi bi-plus"></i>
        </button>
    </form>
</div>
@endsection