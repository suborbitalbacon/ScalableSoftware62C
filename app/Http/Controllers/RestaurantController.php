<?php

namespace App\Http\Controllers;

use App\Restaurant;

class RestaurantController extends Controller
{
    public function showRestaurant() {
        return view('show-restaurant')
            ->with('restaurants', [
                [
                    'name' => 'Waya',
                    'location' => 'Glen Waverley',
                    'cuisine' => 'Japanese',
                ],
                [
                    'name' => 'Uncle Jack',
                    'location' => 'Wheelers Hill',
                    'cuisine' => 'Chinese',
                ],
                [
                    'name' => 'Bon Chicken and Beer',
                    'location' => 'Glen Waverley',
                    'cuisine' => 'Korean',
                ],
            ]);
    }
}
