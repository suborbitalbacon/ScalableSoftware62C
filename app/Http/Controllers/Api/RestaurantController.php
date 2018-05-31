<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    protected $name = 'restaurants';

    public function index(Request $request)
    {
        $query = Restaurant::query();
        if ($request->has('country')) {
            $query->where('country_id', $request->has('country'));
        }
        if ($request->has('category')) {
            $query->where('category_id', $request->has('category'));
        }

        return $query->get();
    }

    public function show(Restaurant $restaurant = null)
    {
        return $restaurant->load('postsWithComments');
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
