@extends('layouts.client')

@section('content')
    <link href="{{ asset('assets/vendor/css/products.css') }}" rel="stylesheet">

    <div class="row">
        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Store</h1>
                <div class="list-group">
                    <a href="#" class="list-group-item">Новинки</a>
                    <a href="#" class="list-group-item">Одежда</a>
                    <a href="#" class="list-group-item">Обувь</a>
                    <a href="#" class="list-group-item">Аксессуары</a>
                    <a href="#" class="list-group-item">Подарки</a>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{ asset('assets/vendor/img/slides/slide-1.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('assets/vendor/img/slides/slide-2.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('assets/vendor/img/slides/slide-3.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top"
                                     src="{{ asset('assets/vendor/img/products/Adidas-hoodie.png') }}"
                                     alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Худи черного цвета с монограммами adidas Originals</a>
                                </h4>
                                <h5>6 090,00 руб.</h5>
                                <p class="card-text">Мягкая ткань для свитшотов. Стиль и комфорт – это образ жизни.</p>
                            </div>
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-outline-success">Отправить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top"
                                     src="{{ asset('assets/vendor/img/products/Blue-jacket-The-North-Face.png') }}" alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Синяя куртка The North Face</a>
                                </h4>
                                <h5>23 725,00 руб.</h5>
                                <p class="card-text">
                                    Гладкая ткань. Водонепроницаемое покрытие. Легкий и теплый пуховый наполнитель.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-outline-success">Отправить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top"
                                     src="{{ asset('assets/vendor/img/products/Brown-sports-oversized-top-ASOS-DESIGN.png') }}"
                                     alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Коричневый спортивный oversized-топ ASOS DESIGN</a>
                                </h4>
                                <h5>3 390,00 руб.</h5>
                                <p class="card-text">Материал с плюшевой текстурой. Удобный и мягкий.</p>
                            </div>
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-outline-success">Отправить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top"
                                     src="{{ asset('assets/vendor/img/products/Black-Nike-Heritage-backpack.png') }}"
                                     alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Черный рюкзак Nike Heritage</a>
                                </h4>
                                <h5>2 340,00 руб.</h5>
                                <p class="card-text">Плотная ткань. Легкий материал.</p>
                            </div>
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-outline-success">Отправить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top"
                                     src="{{ asset('assets/vendor/img/products/Black-Dr-Martens-shoes.png') }}"
                                     alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Черные туфли на платформе с 3 парами люверсов Dr Martens 1461 Bex</a>
                                </h4>
                                <h5>13 590,00 руб.</h5>
                                <p class="card-text">Гладкий кожаный верх. Натуральный материал.</p>
                            </div>
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-outline-success">Отправить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top"
                                     src="{{ asset('assets/vendor/img/products/Dark-blue-wide-leg-ASOs-DESIGN-trousers.png') }}"
                                     alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Темно-синие широкие строгие брюки ASOS DESIGN</a>
                                </h4>
                                <h5>2 890,00 руб.</h5>
                                <p class="card-text">Легкая эластичная ткань сирсакер Фактурная ткань.</p>
                            </div>
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-outline-success">Отправить в корзину</button>
                            </div>
                        </div>
                    </div>

                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>
    </div>
@endsection
