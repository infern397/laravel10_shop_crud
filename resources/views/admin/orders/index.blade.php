@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Orders</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row d-flex justify-content-between align-items-center">
                            <h4 class="card-title w-auto m-0">All Orders</h4>
                            <a href="{{ route('admin.orders.create') }}" class="btn btn-primary w-auto">Add</a>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>CUSTOMER NAME</th>
                                        <th>CUSTOMER EMAIL</th>
                                        <th>TOTAL COST</th>
                                        <th>SHOW</th>
                                        <th>UPDATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td class="text-bold-500">{{ $order->id }}</td>
                                            <td>{{ $order->customer_name }}</td>
                                            <td>{{ $order->customer_email }}</td>
                                            <td>{{ $order->total }}</td>
                                            <td>
                                                <a href="{{ route('admin.orders.show', $order) }}"
                                                   class="btn btn-secondary">Show</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.orders.edit', $order) }}"
                                                   class="btn btn-success">Update</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.orders.destroy', $order) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
