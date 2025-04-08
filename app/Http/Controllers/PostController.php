<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // Since we used Form Request this is redundant
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'body' => 'required|string',
        // ]);

        // Post::create([
        //     'title' => $request->title,
        //     'body' => $request->body,
        // ]);
        Post::create($request->validated());
        return redirect()->route('posts.index')->with('success', 'Your post was created successfully! Feel free to add more posts or edit your existing ones.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, $id)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'content' => 'required',
        // ]);

        $post = Post::findOrFail($id);

        // $post->update([
        //     'title' => $request->title,
        //     'content' => $request->content,
        // ]);
        $post->update($request->validated());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
