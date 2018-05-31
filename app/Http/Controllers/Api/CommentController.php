<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $name = 'comments';

    public function index()
    {
        return Comment::all();
    }

    public function show(Comment $comment = null)
    {
        return $comment;
    }

    public function store(CommentRequest $request)
    {
        return $this->update($request);
    }

    public function update(CommentRequest $request, Comment $comment = null)
    {
        $data = $request->all();
        save(Comment::class, $comment, $data);
        return $comment;
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
    }
}
