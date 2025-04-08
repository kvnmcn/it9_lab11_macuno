@extends('layout')

@section('title', 'Home')

@section('content')
<h1>Laboratory Activity 11</h1>
<p>Submitted by Kevin Macuno</p>
<small>4/8/25</small>
<p>
    <b>Objective:</b>
<ul>
    <li>Set up a Laravel project</li>
    <li>Create and configure a MySQL database</li>
    <li>Use Laravel's Artisan CLI to generate models, migrations, and controllers</li>
    <li>Implement CRUD operations for a blog post</li>
    <li>Use Blade templates for views</li>
</ul>
<a href="{{ route('posts.index') }}" class="btn btn-primary">
    Open Posts
    <i class="fa-solid fa-square-arrow-up-right"></i>
</a>
</p>
@endsection