@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Update Category') }}
    </h2>

    <form action="{{ route('categories.update', $category) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Category Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" value="{{ $category->icon }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>
@endsection