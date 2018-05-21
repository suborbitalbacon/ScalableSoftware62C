<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'post_id' => 'required|exists:posts,id',
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ];
    }

    public function messages() {
        return [
            'post_id.required' => 'Post is required',
            'post_id.exists' => 'Post does not exist',
            'user_id.required' => 'User is required',
            'user_id.exists' => 'User does not exist',
            'content.required' => 'Content is required',
            'content.string' => 'Content should be a string',
        ];
    }
}
