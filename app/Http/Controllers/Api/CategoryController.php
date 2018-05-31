<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $name = 'categories';

    public function index()
    {
        return Category::all();
    }

    public function show(Category $category = null)
    {
        return $category;
    }

    public function store(Request $request)
    {
        return $this->update($request);
    }

    public function update(Request $request, Category $category = null)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
        ]);
        save(Category::class, $category, $data);
        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }
}
