<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'restaurant_id' => 'required|exists:restaurants,id',
            'user_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ];
    }

    public function messages() {
        return [
            'restaurant_id.required' => 'Restaurant is required',
            'restaurant_id.exists' => 'Restaurant does not exist',
            'user_id.required' => 'User is required',
            'user_id.exists' => 'User does not exist',
            'content.required' => 'Content is required',
            'content.string' => 'Content should be a string',
        ];
    }
}
