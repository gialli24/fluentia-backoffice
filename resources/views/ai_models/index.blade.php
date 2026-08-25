@extends('layouts.app')

@php
$path = [
['name' => 'Dashboard', 'url' => route('dashboard')],
['name' => 'Modelli Ai', 'url' => route('ai-models.index')],
];
@endphp


@section('content')

<x-app-header :path="$path" />

<div class="fl-app-content">

    <div class="d-flex justify-content-between align-items-center mb-4 pb-4">
        <h1 class="fl-page-title">Modelli Ai</h1>

        <a href="{{ route('ai-models.create') }}" class="fl-btn primary">
            <i class="bi bi-plus-lg"></i>
            Nuovo modello AI
        </a>
    </div>

    <x-card>
        <table class="fl-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Colore</th>
                    <th class="d-flex justify-content-end">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ai_models as $ai_model)
                <tr>
                    <th scope="row">{{ $ai_model->id }}</th>
                    <td>{{ $ai_model->name }}</td>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div
                                style="width: 10px; height:10px; border-radius: 50%; background-color: {{ $ai_model->color }}">
                            </div>
                            {{$ai_model->color }}
                        </div>
                    </td>
                    <td class="d-flex justify-content-end">
                        <a href="{{ route('ai-models.edit', $ai_model->id) }}" class="fl-btn sm me-2">Modifica</a>

                        {{-- Delete --}}
                        <form action="{{ route('ai-models.destroy', $ai_model->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fl-btn sm"
                                onclick="return confirm('Are you sure you want to delete this ai_model?')">Elimina</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
</div>
@endsection