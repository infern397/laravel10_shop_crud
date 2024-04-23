<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Models\Order;
use App\Models\Product;
use App\Services\CartService;
use App\Services\OrderService;

class OrderController extends Controller
{
    private CartService $cartService;
    private OrderService $orderService;

    public function __construct(CartService $cartService, OrderService $orderService)
    {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $order = Order::query()->create($data);
        $products = $this->cartService->getProducts();
        foreach ($products as $id => $product) {
            $this->orderService->addProduct($order, $id, $product['quantity']);
        }
        $this->cartService->clear();
        return view('client.order.success');
    }

    public function create()
    {
        $products = $this->cartService->getProducts();
        $total = $this->cartService->getTotal();
        return view('client.order.create', ['products' => $products, 'total' => $total]);
    }

}
