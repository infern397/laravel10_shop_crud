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
        $product = Product::query()->find($request['product']);
        $product->stock -= $request['quantity'];
        $product->save();
        return Redirect::back();
    }

    public function destroy(Order $order, Product $product)
    {
        $quantity = $order->products()->withPivot('quantity')->find($product->id)->pivot->quantity;
        $order->products()->detach($product->id);
        $product->stock += $quantity;
        $product->save();
        return Redirect::back();

    }

    public function update(UpdateProductRequest $request, Order $order, Product $product)
    {
        $prevQuantity = $order->products()->withPivot('quantity')->find($product->id)->pivot->quantity;
        $order->products()->syncWithoutDetaching([$product->id => ['quantity' => $request['quantity']]]);
        $product->stock += $prevQuantity - $request['quantity'];
        $product->save();
        return Redirect::back();
    }
}
