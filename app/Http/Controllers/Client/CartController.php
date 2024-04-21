<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\AddInCartRequest;
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
        return view('client.cart', ['products' => $products]);
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
//        dd($product->id);
//        dd($cart);
        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);
        }
        session(['cart' => $cart]);
        return \redirect()->back();
    }
}
