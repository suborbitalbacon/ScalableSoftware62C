<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $name = 'comments';

    public function index()
    {
        $comments = Comment::all();
        return $this->view('index')
            ->with('resources', $comments);
    }

    public function show(Comment $comment = null)
    {
        return $this->view('show')
            ->with('resource', $comment);
    }

    public function edit(Comment $comment = null)
    {
        return $this->view('edit')
            ->with('resource', $comment);
    }

    public function save(CommentRequest $request, Comment $comment = null)
    {
        $data = $request->all();
        save(Comment::class, $comment, $data);
        return $this->redirect();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return $this->redirect();
    }
}
