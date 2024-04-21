@extends('layouts.client')

@section('content')
    <link href="{{ asset('assets/vendor/css/products.css') }}" rel="stylesheet">

    <div class="row">

        <div class="col-12">
            <h4 class="mt-3 mb-3 d-flex justify-content-between align-items-center mb-3">
                Корзина <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            @foreach($products as $id => $product)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light">
                            <div class="row text-center">
                                <div class="col-lg-4">
                                    <input name="basketID" type="number" class="form-control"
                                           value="{{ $product['quantity'] }}" min="0">
                                </div>
                                <div class="col-lg-4">{{ $product['price'] }} $</div>
                                <div class="col-lg-4">
                                    <form method="POST"
                                          action="{{ route('client.cart.destroy', ['product' => $id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i type="submit" role="" class="fas fa-trash text-danger curs"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            @endforeach
            <div class="card mb-3">
                <div class="card-footer">
                    <p class="float-left">Итого</p>
                    <h4 class="float-right">2 390 руб.</h4>
                </div>
            </div>
            <a class="btn btn-success btn-lg float-right" href="../orders/order-create.html">
                Оформить заказ
            </a>
        </div>
    </div>
@endsection
