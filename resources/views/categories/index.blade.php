@extends('layouts.app')

@php
$path = [
['name' => 'Dashboard', 'url' => route('dashboard')],
['name' => 'Categorie', 'url' => route('categories.index')],
];
@endphp


@section('content')

<x-app-header :path="$path" />

<div class="fl-app-content">

    <div class="d-flex justify-content-between align-items-center mb-4 pb-4">
        <h1 class="fl-page-title">Categorie</h1>

        <a href="{{ route('categories.create') }}" class="fl-btn primary">
            <i class="bi bi-plus-lg"></i>
            Nuova categoria
        </a>
    </div>

    <x-card>
        <table class="fl-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Icona</th>
                    <th class="d-flex justify-content-end">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td><i class="bi bi-{{ $category->icon }} me-2"></i> {{ $category->icon }}</td>
                    <td class="d-flex justify-content-end">
                        <a href="{{ route('categories.edit', $category) }}" class="fl-btn sm me-2">Modifica</a>

                        {{-- Delete --}}
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fl-btn sm"
                                onclick="return confirm('Are you sure you want to delete this category?')">Elimina</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
</div>
@endsection