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
        $data = $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|string',
            'address1' => 'required|string',
            'address2' => 'nullable|string',
            'suburb' => 'required|string',
            'state' => 'required|string|max:3',
            'seats' => 'required|integer|min:0',
            'country_id' => 'required|integer|exists:countries,id',
            'category_id' => 'required|integer|exists:categories,id',
        ]);
        save(Restaurant::class, $restaurant, $data);
        return $this->redirect();
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect($this->baseUrl);
    }
}
