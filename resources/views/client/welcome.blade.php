@extends('layouts.client')

@section('content')
    <link href="{{ asset('assets/vendor/css/index.css') }}" rel="stylesheet">

    <div class="row">
        <div class="col-lg-6">
            <h1 class="mt-5">Store</h1>
            <p>
                Новые образы и лучшие бренды на Store.
                Бесплатная доставка по всему миру! Аутлет: до -70% Собственный бренд. -20% новым покупателям.
            </p>
            <button id="start-purchase-btn" type="button" class="btn btn-lg">
                <a id="start-purchase-link" href="products.html">
                    Начать покупки
                </a>
            </button>
        </div>
    </div>
@endsection
