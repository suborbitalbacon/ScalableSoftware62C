<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $name = 'countries';

    public function index()
    {
        $categories = Country::all();
        return $this->view('index')
            ->with('resources', $categories);
    }

    public function show(Country $country = null)
    {
        return $this->view('show')
            ->with('resource', $country);
    }

    public function edit(Country $country = null)
    {
        return $this->view('edit')
            ->with('resource', $country);
    }

    public function save(Request $request, Country $country = null)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
        ]);
        save(Country::class, $country, $data);
        return $this->redirect();
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return $this->redirect();
    }
}
