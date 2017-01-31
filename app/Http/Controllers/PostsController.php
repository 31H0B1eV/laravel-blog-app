<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/');
    }
}