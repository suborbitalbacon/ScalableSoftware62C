<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $name = 'categories';

    public function index()
    {
        $categories = Category::all();
        return $this->view('index')
            ->with('resources', $categories);
    }

    public function show(Category $category = null)
    {
        return $this->view('show')
            ->with('resource', $category);
    }

    public function edit(Category $category = null)
    {
        return $this->view('edit')
            ->with('resource', $category);
    }

    public function save(Request $request, Category $category = null)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
        ]);
        save(Category::class, $category, $data);
        return $this->redirect();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return $this->redirect();
    }
}
