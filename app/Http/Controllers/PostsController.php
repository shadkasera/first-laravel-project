<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'unique:posts', 'max:255'],
            'description' => 'required'
        ]);

        Post::create($request->all());

        return redirect()->route('post.index');
    }

    public function edit(Post $post)
    {
        return view('posts/edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => 'required'
        ]);

        $post->update($request->all());

        return redirect()->route('post.index');
    }

    public function destroy(Post $post) {
        $post->delete();

        return back();
    }
}
