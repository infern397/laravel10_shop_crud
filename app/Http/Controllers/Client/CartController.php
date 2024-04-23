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

class CartController extends Controller
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        $products = $this->cartService->getProducts();
        $total = $this->cartService->getTotal();
        return view('client.cart', ['products' => $products, 'total' => $total]);
    }

    public function store(AddInCartRequest $request)
    {
        $data = $request->validated();
        $product = Product::query()->findOrFail($data['product']);
        $this->cartService->addProduct($product, $data['quantity']);
        return \redirect()->back();
    }

    public function destroy(Product $product)
    {
        $this->cartService->removeProduct($product->id);
        return \redirect()->back();
    }

    public function update(UpdateInCartRequest $request, Product $product,)
    {
        $data = $request->validated();
        $this->cartService->updateProduct($product, $data['quantity']);
        return \redirect()->back();
    }
}
