<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\Product\AddProductRequest;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function show(Order $order)
    {
        $products = $order->products()->get();
//        dd($products);
        return view('admin.orders.show', ['order' => $order, 'products' => $products]);
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Order::query()->create($data);
        return Redirect::route('admin.orders.index');
    }

    public function edit(Order $order)
    {
        $allProducts = Product::all();
        $availableToAddProducts = $allProducts->diff($order->products()->get());
        return view('admin.orders.edit', ['order' => $order, 'availableProducts' => $availableToAddProducts]);
    }
    public function update(UpdateRequest $request, Order $order)
    {
        $data = $request->validated();
        $order->update($data);
        return Redirect::route('admin.orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return Redirect::route('admin.orders.index');
    }

    public function addProduct(Order $order, Product $product, AddProductRequest $request)
    {
        $order->products()->attach($product->id, ['quantity' => $request['quantity']]);
        return Redirect::back();
    }

    public function updateProduct(Order $order, Product $product, AddProductRequest $request)
    {
        $order->products()->syncWithoutDetaching([$product->id => ['quantity' => $request['quantity']]]);
        return Redirect::back();
    }

    public function removeProduct(Order $order, Product $product)
    {
        $order->products()->detach($product->id);
        return Redirect::back();
    }
}
