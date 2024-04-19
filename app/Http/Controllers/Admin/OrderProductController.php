<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\Product\AddProductRequest;
use App\Http\Requests\Order\Product\UpdateProductRequest;
use App\Models\Order;
use App\Models\Product;
use App\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderProductController extends Controller
{
    private OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function store(AddProductRequest $request, Order $order)
    {
        $data = $request->validated();
        $this->orderService->addProduct($order, $data['product'], $data['quantity']);
        return Redirect::back();
    }

    public function destroy(Order $order, Product $product)
    {
        $this->orderService->removeProduct($order, $product);
        return Redirect::back();

    }

    public function update(UpdateProductRequest $request, Order $order, Product $product)
    {
        $data = $request->validated();
        $this->orderService->updateProduct($order, $product, $data['quantity']);
        return Redirect::back();
    }
}
