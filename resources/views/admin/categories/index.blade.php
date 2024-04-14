@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Categories</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row d-flex justify-content-between align-items-center">
                            <h4 class="card-title w-auto m-0">All Categories</h4>
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
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>SHOW</th>
                                        <th>UPDATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="text-bold-500">{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.categories.show', $category) }}"
                                                   class="btn btn-secondary">Show</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.categories.edit', $category) }}"
                                                   class="btn btn-success">Update</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.categories.destroy', $category) }}"
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
