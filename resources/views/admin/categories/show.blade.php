@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Category</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row d-flex justify-content-between align-items-center">
                            <h4 class="card-title w-auto m-0">Category: {{ $category->name }}</h4>
                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary w-auto">Add</a>
                        </div>
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
                                        <td>{{ $category->id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">NAME</td>
                                        <td>{{ $category->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">CREATED AT</td>
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">UPDATED AT</td>
                                        <td>{{ $category->updated_at->diffForHumans() }}</td>
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
