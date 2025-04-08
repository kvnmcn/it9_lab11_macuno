@extends('layout')

@section('title', 'Create Post')

@section('content')
<h1>Create New Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ old('title') }}">
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>

        @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body"
            rows="5">{{ old('body') }}</textarea>
        @error('body')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Create Post</button>
</form>
@endsection