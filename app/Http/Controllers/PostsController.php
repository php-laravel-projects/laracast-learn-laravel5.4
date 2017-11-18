<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($postId)
    {
        $post = Post::find($postId);

        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
}
