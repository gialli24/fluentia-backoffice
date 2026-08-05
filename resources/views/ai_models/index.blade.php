@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Ai Models') }}
    </h2>

    <a href="{{ route('ai-models.create') }}" class="btn btn-primary">Add</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Color</th>
                <th scope="col">Actions</th>
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
                <td>
                    <a href="{{ route('ai-models.edit', $ai_model->id) }}" class="btn btn-warning">Update</a>

                    {{-- Delete --}}
                    <form action="{{ route('ai-models.destroy', $ai_model->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure you want to delete this ai model?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection