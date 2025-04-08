@extends('layout')

@section('title', 'Posts')

@section('content')
<h1 class="mb-4 text-center">Posts</h1>
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<hr>
<div class="text-end">
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-2" role="button">Create Post</a>
</div>

<div class="row">
    @foreach ($posts as $post)
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->body, 100, '...') }}</p> <!-- Limit the body text -->
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary" title="Show">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger" title="Delete">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection