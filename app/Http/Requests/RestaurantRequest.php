<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|string',
            'address1' => 'required|string',
            'address2' => 'nullable|string',
            'suburb' => 'required|string',
            'state' => 'required|string|max:3',
            'seats' => 'required|integer|min:0',
            'country_id' => 'required|integer|exists:countries,id',
            'category_id' => 'required|integer|exists:categories,id',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name should be a string',
            'phone.required' => 'Phone is required',
            'phone.string' => 'Phone should be a string',
            'address1.required' => 'Address line 1 is required',
            'address1.string' => 'Address line 1 should be a string',
            'address2.string' => 'Address line 2 should be a string',
            'suburb.required' => 'Suburb is required',
            'suburb.string' => 'Suburb should be a string',
            'state.required' => 'State is required',
            'state.string' => 'State should be a string',
            'state.max' => 'State should be three characters long',
            'seats.required' => 'Seats is required',
            'seats.integer' => 'Seats should be an integer',
            'seats.min' => 'Seats should be greater than zero',
            'country_id.required' => 'Country is required',
            'country_id.integer' => 'Country should be an integer',
            'country_id.exists' => 'Country does not exist',
            'category_id.required' => 'Category is required',
            'category_id.integer' => 'Category should be an integer',
            'category_id.exists' => 'Category does not exist',
        ];
    }
}
