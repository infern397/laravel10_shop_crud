@extends('layouts.client')

@section('content')
    <link href="{{ asset('assets/vendor/css/products.css') }}" rel="stylesheet">


    <section>
        <div class="container pt-5">
            <div class="text-center mt-5">
                <h1>Заказы</h1>
                <div class="orders mt-5">
                    <table class="table">
                        <thead>
                        <tr class="table-light">
                            <th scope="col">#</th>
                            <th scope="col">Создан</th>
                            <th scope="col">Итого</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->total }} руб.</td>
                                <td>
                                    <a href="order.html">просмотреть</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
