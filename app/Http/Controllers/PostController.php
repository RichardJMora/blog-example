<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('welcome', compact('posts'));
    }

    public function show($id)
    {	
        return view('posts.show', ['post' => Post::findOrFail($id)]);
    }
}
