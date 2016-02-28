<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PostController extends Controller
{
    public function index()
    {
        $posts = \App\Post::all();
        
        return view('posts.index')->with('posts', $posts);
    }
    
    public function show($id)
    {
        $post = \App\Post::find($id);
        
        return view('posts.show')->with('post', $post);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $post = new \App\Post();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        
        return redirect(route('posts.index'));
    }
}
