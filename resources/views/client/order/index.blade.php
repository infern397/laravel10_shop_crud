@extends('layouts.client')

@section('content')
    <section>
        <div class="container pt-5">
            <div class="text-center mt-5">
                <h1>Заказ №{{ $order->id }}</h1>
                <div class="orders mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Название</th>
                            <th scope="col">Кол-во</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Сумма</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <th scope="row">
                                    {{ $product->name }}
                                </th>
                                <td>{{ $product->pivot->quantity }}</td>
                                <td>{{ $product->price }} руб.</td>
                                <td>{{ $product->pivot->quantity * $product->price }} руб.</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <p class="float-right h4 mt-3">Итого {{ $order->total }} руб.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
