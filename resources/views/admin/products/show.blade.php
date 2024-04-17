@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Product</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product: {{ $product->name }}</h4>
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
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">NAME</td>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">DESCRIPTION</td>
                                        <td>{!! $product->description !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">PRICE</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">STOCK</td>
                                        <td>{{ $product->stock }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">IMAGE</td>
                                        <td>
                                            <img class="w-100" src="{{ asset('storage/' . $product->image_url) }}" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">CATEGORY</td>
                                        <td>{{ $product->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">CREATED AT</td>
                                        <td>{{ $product->created_at->diffForHumans() }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">UPDATED AT</td>
                                        <td>{{ $product->updated_at->diffForHumans() }}</td>
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
