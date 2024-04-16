@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Order</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Order: {{ $order->id }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                    <tr>
                                        <th>FIELD</th>
                                        <th>VALUE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-bold-500">ID</td>
                                        <td>{{ $order->id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">CUSTOMER NAME</td>
                                        <td>{{ $order->customer_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">CUSTOMER EMAIL</td>
                                        <td>{{ $order->customer_email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">TOTAL PRICE</td>
                                        <td>{{ $order->total }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">Products</td>
                                        <td>
                                            <div class="table-responsive">
                                                <table class="table table-lg">
                                                    <thead>
                                                    <tr>
                                                        <th>NAME</th>
                                                        <th>PRICE</th>
                                                        <th>COUNT</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($products as $product)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $product->name }}</td>
                                                            <td>{{ $product->price }}</td>
                                                            <td class="text-bold-500">{{ $product->pivot->quantity }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-bold-500">CREATED AT</td>
                                        <td>{{ $order->created_at->diffForHumans() }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">UPDATED AT</td>
                                        <td>{{ $order->updated_at->diffForHumans() }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
