<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $name = 'posts';

    public function index()
    {
        $posts = Post::all();
        return $this->view('index')
            ->with('resources', $posts);
    }

    public function show(Post $post = null)
    {
        return $this->view('show')
            ->with('resource', $post);
    }

    public function edit(Post $post = null)
    {
        return $this->view('edit')
            ->with('resource', $post);
    }

    public function save(Request $request, Post $post = null)
    {
        $data = $this->validate($request, [
            'restaurant_id' => 'required|exists:restaurants,id',
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);
        save(Post::class, $post, $data);
        return $this->redirect();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return $this->redirect();
    }
}
