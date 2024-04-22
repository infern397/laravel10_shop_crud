@extends('layouts.client')

@section('content')
    <link href="{{ asset('assets/vendor/css/products.css') }}" rel="stylesheet">

    <div class="row">
        <div class="col-lg-12">
            <h4 class="mt-3 mb-3 d-flex justify-content-between align-items-center mb-3">
                Корзина <span class="badge badge-secondary badge-pill">{{ sizeof($products) }}</span>
            </h4>
            @foreach($products as $id => $product)

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-light">
                            <div class="row text-center align-items-center d-flex">
                                <form class="d-flex justify-content-between align-items-center col-lg-10" method="POST"
                                      action="{{ route('client.cart.update', ['product' => $id]) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="col-lg-4">
                                        <input name="quantity" type="number" class="form-control"
                                               value="{{ $product['quantity'] }}" min="0">
                                        @error('quantity_' . $id)
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">{{ $product['price'] }} $</div>
                                    <div class="col-lg-4">
                                        <input hidden="hidden" type="text" name="product" value="{{ $id }}" id="">
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i type="submit" role="" class="fas fa-check text-success curs"></i>
                                        </button>
                                    </div>
                                </form>
                                <form method="POST" class="col-lg-2"
                                      action="{{ route('client.cart.destroy', ['product' => $id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i type="submit" role="" class="fas fa-trash text-danger curs"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            @endforeach
            <div class="card mb-3">
                <div class="card-footer">
                    <p class="float-left">Итого</p>
                    <h4 class="float-right">{{ $total }} $</h4>
                </div>
            </div>
            <a class="btn btn-success btn-lg float-right" href="../orders/order-create.html">
                Оформить заказ
            </a>
        </div>
    </div>
@endsection
