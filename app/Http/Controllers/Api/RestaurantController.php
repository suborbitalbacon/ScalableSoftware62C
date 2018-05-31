<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    protected $name = 'restaurants';

    public function index()
    {
        return Restaurant::all();
    }

    public function show(Restaurant $restaurant = null)
    {
        return $restaurant;
    }

    public function store(RestaurantRequest $request)
    {
        return $this->update($request);
    }

    public function update(RestaurantRequest $request, Restaurant $restaurant = null)
    {
        $data = $request->all();
        save(Restaurant::class, $restaurant, $data);
        return $restaurant;
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
    }
}
