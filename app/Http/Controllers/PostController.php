<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return PostResource::collection($posts);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        if ($post->save()) {
            return new PostResource($post);
        }
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        if ($post->save()) {
            return new PostResource($post);
        }
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if ($post->delete()) {
            return new PostResource($post);
        }
    }
}
