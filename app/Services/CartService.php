<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Product;

class CartService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function addProduct(Product $product, int $quantity)
    {
        $product = Product::query()->findOrFail($product->id);
        $cart = session('cart');
        if (!isset($cart)) {
            $cart = [];
        }
        $cart[$product->id] = [
            'name' => $product->name,
            'description' => $product->description,
            'price' => $product->price,
            'quantity' => $quantity,
        ];
        session(['cart' => $cart]);
    }

    public function updateProduct(Product $product, int $quantity)
    {
        $cart = session('cart');
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] = $quantity;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'quantity' => $quantity
            ];
        }
        session(['cart' => $cart]);
    }

    public function removeProduct(int $id)
    {
        $cart = session('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        session(['cart' => $cart]);
    }
}
