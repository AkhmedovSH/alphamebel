@extends('layout')


@section('content')
<main class="goods-inner">
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
                <li>Спальни / </li>
            </a>
            <a>
                <li>{{ $product->title }}</li>
            </a>
        </ul>
    </div>
    <div class="goods container">
        <h1>{{ $product->title }}</h1>
        <div class="content">
            <div class="slider col-xl-7 col-lg-7 col-md-6 col-sm-12">
                <div class="img">
                    <div class="mainslider-card_main">
                        <img src="{{asset('uploads/products/'). '/'. $product->image }}" class="main_img">
                    </div>
                    <div class="img_markers collectioncarousel owl-carousel">
                        @if($product->images != null)
                            @foreach (json_decode($product['images']) as $item)
                            <div class="mainslider-sub-img">
                                <img src="{{ asset('uploads/products/'). '/'. $item->image }}" class="img_item1">
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="close">
                    </div>
                </div>
            </div>
            <div class="desc col-xl-5">
                <h2>Кровать 2 спальная (1600мм)</h2>
                <div class="size">
                    <p>Габариты:</p>
                    <p>Ш: 1987</p>
                    <p>Д: 2087</p>
                    <p>В: 6505</p>
                </div>
                <p class="code">Код: 484700</p>
                <div class="additem">
                    <div class="price">
                        <p>21 356 000 сум</p>
                        <p>30 345 000 сум</p>
                    </div>
                    <div class="installment">
                        <span>В кредит от</span>
                        <p>300 345 сум/мес</p>
                    </div>
                    <form action="/cart" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="title" value="{{ $product->title }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="sale" value="{{ $product->sale }}">
                        <button type="submit" class="add" id="additem">В КОРЗИНУ</button>
                    </form>
                </div>
                <div class="tabs">
                    <h2>{{ $product->title }}</h2>
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-properties-tab" data-toggle="pill"
                                href="#pills-properties" role="tab" aria-controls="pills-properties"
                                aria-selected="true">характеристики</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-desc-tab" data-toggle="pill" href="#pills-desc" role="tab"
                                aria-controls="pills-desc" aria-selected="false">описание</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-properties" role="tabpanel"
                            aria-labelledby="pills-properties-tab">
                            <div class="tab-properties">
                                <ul>
                                    @foreach($attributes as $attribute)
                                    <li>
                                        <p>{{ $attribute->filter->title }}</p>
                                        <span>{{ $attribute->title }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">
                            <p>
                                {!! $product->description !!}
                            </p>
                            <h3>текстуры</h3>
                            <div class="texture">
                                <img src="/assets/img/collections/beds/raminibosco/texture.png" >
                            </div>
                            <p class="front">
                                Корпус и фасад: Ясень Aveiro Esche декапе
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="from-collection">
            <div class="title">
                <h3>Коллекция</h3>
                <a href="#!">СМОТРЕТЬ ВСЕ</a>
            </div>
            <div class="desc">
                <div class="collection-card col-xl-4">
                    <div class="card">
                        <a href="/collections/beds/raminibosco.html">
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="goodinnercarousel owl-carousel">
                        <div class="sub-content col-xl-12 col-12">
                            <div class="goodscard">
                                <div class="img">
                                    <a href="bed1.html" class="goodsimg-main">
                                        <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                                        <div class="img_markers">
                                            <img src="/assets/img/goods/beds/item (2).jpg" alt=""
                                                class="img_item1">
                                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                                class="img_item2">
                                        </div>
                                        <div class="stock">
                                            <span>-10%</span>
                                            <p>Распродажа</p>
                                        </div>
                                </div>
                                <div class="desc">
                                    <a href="bed1.html">
                                        <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                                        <p class="code">Код: 484700</p>
                                        <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                            Bogema,
                                            Кровать
                                            2-спальная, цвет темный из коллекции </p>
                                        <div class="size">
                                            <p>Ш: 1987</p>
                                            <p>Д: 2087</p>
                                            <p>В: 6505</p>
                                        </div>
                                    </a>
                                    <div class="order">
                                        <div class="price">
                                            <p>21 356 000 сум</p>
                                            <p>30 345 000 сум</p>
                                        </div>
                                        <button class="add">КУПИТЬ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="addedToBasket">
        <p>Товар добавлен в корзину</p>
        <div id="addedItemClose">
            <img src="/assets/img/elements/menu-close-white.svg" alt="">
        </div>
    </div>
</main>
@endsection