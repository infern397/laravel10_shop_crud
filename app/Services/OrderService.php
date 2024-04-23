<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Product;

class OrderService
{
    private CartService $cartService;

    /**
     * Create a new class instance.
     */
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function addProduct(Order $order, int $productId, int $quantity)
    {
        $product = Product::query()->findOrFail($productId);
        $order->products()->attach($productId, ['quantity' => $quantity]);
        $product->decrement('stock', $quantity);
    }

    public function updateProduct(Order $order, Product $product, int $quantity)
    {
        $prevQuantity = $order->products()->withPivot('quantity')->findOrFail($product->id)->pivot->quantity;
        $order->products()->syncWithoutDetaching([$product->id => ['quantity' => $quantity]]);
        $product->increment('stock', $prevQuantity - $quantity);

    }

    public function removeProduct(Order $order, Product $product)
    {
        $quantity = $order->products()->withPivot('quantity')->findOrFail($product->id)->pivot->quantity;
        $order->products()->detach($product->id);
        $product->increment('stock', $quantity);
    }

    public function createOrder(array $data)
    {
        $order = Order::query()->create($data);
        $products = $this->cartService->getProducts();
        foreach ($products as $id => $product) {
            $this->addProduct($order, $id, $product['quantity']);
        }
        $this->cartService->clear();
    }
}
