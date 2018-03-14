<?php

namespace App\Http\Controllers;

use App\Restaurant;

class RestaurantController extends Controller
{
    public function listRestaurants() {
        return view('list-restaurants')
            ->with('restaurants', Restaurant::paginate(5));
    }

    public function createRestaurant() {
        $newRestaurant = Restaurant::create(request()->all());
        return response()->json($newRestaurant);
    }

    public function updateRestaurant(Restaurant $restaurant) {
        $restaurant->update(request()->all());
        return response()->json($restaurant);
    }

    public function deleteRestaurant(Restaurant $restaurant) {
        $restaurant->delete();
        return response()->json();
    }
}
