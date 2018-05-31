<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $name = 'countries';

    public function index()
    {
        return Country::all();
    }

    public function show(Country $country = null)
    {
        return $country;
    }

    public function store(Request $request)
    {
        return $this->update($request);
    }

    public function update(Request $request, Country $country = null)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
        ]);
        save(Country::class, $country, $data);
        return $country;
    }

    public function destroy(Country $country)
    {
        $country->delete();
    }
}
