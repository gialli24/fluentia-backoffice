@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Update Ai Model') }}
    </h2>

    <form action="{{ route('ai-models.update', $ai_model) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Ai Model Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $ai_model->name }}" required>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label">Ai Model Color</label>
            <input type="color" class="form-control" id="color" name="color" value="{{ $ai_model->color }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Ai Model</button>
    </form>
</div>
@endsection