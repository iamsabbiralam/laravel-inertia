<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        sleep(1);
        $posts = PostResource::collection(Post::all());
        
        return inertia('Posts/Index', compact('posts'));
    }

    public function create()
    {
        return inertia('Posts/Create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->route('posts.index');
    }
}
