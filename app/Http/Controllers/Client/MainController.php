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
        $products = Product::query()->paginate(10);
        return view('client.index', ['categories' => $categories, 'products' => $products]);
    }
}
