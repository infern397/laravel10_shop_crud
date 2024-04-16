<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('admin.product.show', ['product' => $product]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', ['categories' => $categories]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image_url'] = Storage::disk('public')->put('/images/products', $data['image_url']);
        Product::query()->create($data);
        return Redirect::route('admin.product.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        if (isset($request['image_url'])) {
            Storage::disk('public')->delete($product->image_url);
            $data['image_url'] = Storage::disk('public')->put('/images/products', $data['image_url']);
        }
        $product->update($data);
        return Redirect::route('admin.product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route('admin.product.index');
    }
}
