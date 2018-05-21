<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    protected $name = 'restaurants';

    public function index()
    {
        $restaurants = Restaurant::all();
        return $this->view('index')
            ->with('resources', $restaurants);
    }

    public function show(Restaurant $restaurant = null)
    {
        return $this->view('show')
            ->with('resource', $restaurant);
    }

    public function edit(Restaurant $restaurant = null)
    {
        return $this->view('edit')
            ->with($this->defaults())
            ->with('resource', $restaurant);
    }

    public function save(Request $request, Restaurant $restaurant = null)
    {
        $data = $request->all();
        save(Restaurant::class, $restaurant, $data);
        return $this->redirect();
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect($this->baseUrl);
    }
}
