<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Models\Order;
use App\Models\Product;
use App\Services\CartService;
use App\Services\OrderService;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    private CartService $cartService;
    private OrderService $orderService;

    public function __construct(CartService $cartService, OrderService $orderService)
    {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
    }

    public function index(Order $order)
    {
        $products = $order->products()->get();
        return view('client.order.index', ['order' => $order, 'products' => $products]);
    }

    public function orders()
    {
        $orders = Order::query()->where('customer_email', Auth::user()->email)->get();
        return view('client.orders', ['orders' => $orders]);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->orderService->createOrder($data);
        return view('client.order.success');
    }

    public function create()
    {
        $products = $this->cartService->getProducts();
        $total = $this->cartService->getTotal();
        return view('client.order.create', ['products' => $products, 'total' => $total]);
    }

}
