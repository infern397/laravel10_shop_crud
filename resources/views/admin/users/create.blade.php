@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Create User</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('admin.users.store') }}" method="POST"
                                  class="form form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Name</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control"
                                                   name="name" placeholder="Name">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="first-name-horizontal" class="form-control"
                                                   name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control"
                                                   name="password" placeholder="Password">
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection