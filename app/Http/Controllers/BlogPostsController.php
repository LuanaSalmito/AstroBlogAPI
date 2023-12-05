<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\BlogPost;

class BlogPostsController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = BlogPost::create($validatedData);

        return response()->json($post);
    }
}
