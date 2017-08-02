<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
        //return response()->json($posts);
    	return view('welcome', compact('posts'));
    }

    public function indexApi()
    {
        $posts = Post::all();
        return $posts->toJson();
        //return response()->toJson($posts);
    }

    public function show($id)
    {	
    	$post = Post::findOrFail($id);

    	$comments = $post->comments;

    	return view('posts.show', compact('post', 'comments'));
    	//$comments = Comment::find($id)->comments;
        //return view('posts.show', ['post' => Post::findOrFail($id)]);

    }
}
