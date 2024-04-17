<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\Product\AddProductRequest;
use App\Http\Requests\Order\Product\UpdateProductRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderProductController extends Controller
{
    public function store(AddProductRequest $request, Order $order)
    {
        $order->products()->attach($request['product'], ['quantity' => $request['quantity']]);
        return Redirect::back();
    }

    public function destroy(Order $order, Product $product)
    {
        $order->products()->detach($product->id);
        return Redirect::back();

    }

    public function update(UpdateProductRequest $request, Order $order, Product $product)
    {
        $order->products()->syncWithoutDetaching([$product->id => ['quantity' => $request['quantity']]]);
        return Redirect::back();
    }
}
