<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderByDesc('created_at')->paginate(3);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::query()->findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
