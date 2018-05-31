<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Comment;
use App\Restaurant;

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

    public function indexPostByRestaurant(Restaurant $restaurant)
    {
      if(!Post::where('restaurant_id', '=', $restaurant->id)->get())
      {
        return response()->json(null, 404);
      }
      return Post::where('restaurant_id', '=', $restaurant->id)->get();
    }

    public function storePostByRestaurant(Restaurant $restaurant,PostRequest $request, Post $post = null)
    {
      $data = $request->all();
      $data->restaurant_id = $restaurant->id;
      save(Post::class, $post, $data);
      return response()->json($post, 201);
    }

    public function updatePostByRestaurant(Restaurant $restaurant, PostRequest $request)
    {
      if(!Post::where('restaurant_id', '=', $restaurant->id)->get())
      {
        return response()->json(null, 404);
      }
      $data = $request->all();
      $data->restaurant_id = $restaurant->id;
      $this->update($data);
      return response()->json($post, 201);
    }
    public function deletePostByRestaurant(Restaurant $restaurant,Post $post)
    {
      if(!Post::where('restaurant_id', '=', $restaurant->id)->get())
      {
        return response()->json(null, 404);
      }
      foreach ($post->comment as $key => $value) {
        $value->delete();
      }
      $post->delete();
      return response()->json(null, 404);
    }
}
