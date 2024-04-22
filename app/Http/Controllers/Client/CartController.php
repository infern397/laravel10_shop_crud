<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\AddInCartRequest;
use App\Http\Requests\Cart\UpdateInCartRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $products = session('cart');
        $total = array_sum(array_map(function ($product) {
            return $product['quantity'] * $product['price'];
        }, $products));
        return view('client.cart', ['products' => $products, 'total' => $total]);
    }

    public function add(AddInCartRequest $request)
    {
        $data = $request->validated();
        $product = Product::query()->findOrFail($data['product']);
        $cart = session('cart');
        if (!isset($cart)) {
            $cart = [];
        }
        $cart[$product->id] = [
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'quantity' => $data['quantity']
        ];
        session(['cart' => $cart]);
        return \redirect()->back();
    }

    public function destroy(Product $product)
    {
        $cart = session('cart');
        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);
        }
        session(['cart' => $cart]);
        return \redirect()->back();
    }

    public function update(UpdateInCartRequest $request, Product $product,)
    {
        $data = $request->validated();
        $cart = session('cart');
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] = $data['quantity'];
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'quantity' => $data['quantity']
            ];
        }
        session(['cart' => $cart]);
        return \redirect()->back();
    }
}
