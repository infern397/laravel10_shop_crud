<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\AddInCartRequest;
use App\Http\Requests\Cart\UpdateInCartRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function store(Request $request)
    {
        dd($request);
        $data = $request->validated();
        $product = Product::query()->findOrFail($data['product']);
        $this->cartService->addProduct($product, $data['quantity']);
        return \redirect()->back();
    }

}
