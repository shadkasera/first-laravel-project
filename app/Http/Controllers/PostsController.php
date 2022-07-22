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

        Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('post.index');
    }
}
