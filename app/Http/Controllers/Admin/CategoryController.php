<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function show(Category $category)
    {
        return view('admin.category.show', ['category' => $category]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Category::query()->create($data);
        return Redirect::route('admin.category.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', ['category' => $category]);
    }
    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return Redirect::route('admin.category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return Redirect::route('admin.category.index');
    }
}
