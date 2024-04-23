@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="page-heading">
        <h3>Create Order</h3>
    </div>
    <div class="page-content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.orders.index') }}">Orders</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add order</li>
        </ol>
        <section class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Order</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('admin.orders.store') }}" method="POST"
                                  class="form form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Customer FirstName</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control"
                                                   name="customer_firstname" placeholder="Firstname">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Customer LastName</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control"
                                                   name="customer_lastname" placeholder="Lastname">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Customer Address</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control"
                                                   name="customer_address" placeholder="Address">
                                        </div>
                                        @error('quantity')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Customer Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control"
                                                   name="customer_email" placeholder="Email">
                                        </div>
                                        @error('customer_email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @error('total')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror

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
    <script src="{{ asset('assets/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('assets/static/js/pages/form-element-select.js') }}"></script>
@endsection
