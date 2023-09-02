<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
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

    public function store(StorePostRequest $request)
    {
        sleep(2);
        Post::create($request->validated());

        return redirect()->route('posts.index')
            ->with('message', 'Post created successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('message', 'Post deleted successfully.');
    }
}
