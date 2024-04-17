@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/summernote/summernote-lite.css') }}">

    <div class="page-heading">
        <h3>Update Product</h3>
    </div>
    <div class="page-content">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
        <section class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product: {{ $product->name }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('admin.products.update', $product) }}" method="POST"
                                  class="form form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Name</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name-horizontal" class="form-control"
                                                   name="name" placeholder="Name" value="{{ $product->name }}">
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="summernote">Description</label>
                                            <textarea id="summernote"
                                                      name="description">{{{ $product->description }}}</textarea>
                                            @error('description')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Price</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="first-name-horizontal" class="form-control"
                                                   name="price" placeholder="Price" value="{{ $product->price }}">
                                            @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="first-name-horizontal">Stock</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="first-name-horizontal" class="form-control"
                                                   name="stock" placeholder="Stock" value="{{ $product->stock }}">
                                            @error('stock')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="formFile">Image</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input name="image_url" class="form-control" type="file" id="formFile">
                                            @error('image_url')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="formFile">Current Image</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <img class="w-100" src="{{ asset('storage/' . $product->image_url) }}"
                                                 alt="">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="basicSelect">Category</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-select" id="basicSelect" name="category_id">
                                                @foreach($categories as $category)
                                                    <option @if($category->id == $product->category_id) selected
                                                            @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
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
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('assets/static/js/pages/summernote.js') }}"></script>
@endsection
