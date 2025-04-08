@extends('layout')

@section('title', $post->title . ' | Post')

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<a href="{{ route('posts.index') }}" class="btn btn-secondary" title="Back to Posts">
    <i class="fa-solid fa-arrow-left"></i>
    Back to Posts</a>
<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" title="Edit">
    <i class="fas fa-edit"></i>
    Edit
</a>
<form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger" title="Delete">
        <i class="fas fa-trash"></i>
        Delete
    </button>
</form>
@endsection