<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    protected $name = 'posts';

    public function index()
    {
        return Post::all();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(PostRequest $request)
    {
        return $this->update($request);
    }

    public function update(PostRequest $request, Post $post = null)
    {
        $data = $request->all();
        save(Post::class, $post, $data);
        return $post;
    }

    public function destroy(Post $post)
    {
        $post->delete();
    }
}
