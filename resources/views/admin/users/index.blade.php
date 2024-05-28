@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Users</h3>
    </div>
    <div class="page-content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
        <section class="row">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row d-flex justify-content-between align-items-center">
                            <h4 class="card-title w-auto m-0">All Users</h4>
                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary w-auto">Add</a>
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
                                        <th>EMAIL</th>
                                        <th>SHOW</th>
                                        <th>UPDATE</th>
                                        <th>DELETE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="text-bold-500">{{ $user->id }}</td>
                                            <td>{{ "$user->firstname $user->lastname" }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('admin.users.show', $user) }}"
                                                   class="btn btn-secondary">Show</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.users.edit', $user) }}"
                                                   class="btn btn-success">Update</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.users.destroy', $user) }}"
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
