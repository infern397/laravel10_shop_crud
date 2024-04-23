<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::query()->paginate(12);
        return view('client.index', ['categories' => $categories, 'products' => $products]);
    }

    public function create()
    {
        $products = session('cart', []);
        $total = array_sum(array_map(function ($product) {
            return $product['quantity'] * $product['price'];
        }, $products));
        return view('client.order.create', ['products' => $products, 'total' => $total]);
    }
}
