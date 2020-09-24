@extends('layout')


@section('content')
<main class="goods-inner">
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
                <li>{{ $category->title }} / </li>
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
                <h2>{{ $product->title }}</h2>
                <div class="size">
                    <p>Габариты:</p>
                    @if ($product->width != null)
                        <p>Ш: {{ $product->width }}</p>
                    @endif
                    @if ($product->length != null)
                        <p>Д: {{ $product->length }}</p>
                    @endif
                    @if ($product->height != null)
                        <p>В: {{ $product->height }}</p>
                    @endif
                </div>
                @if ($product->code != null)
                    <p class="code">Код: {{ $product->code }}</p>
                @endif
                
                <div class="additem">
                    <div class="price">
                        <span>{{ $product->sale != 0 ? number_format($product->price - (($product->price / 100) * $product->sale), 0) : $product->price }} сум</span>
                        @if ($product->sale != 0)
                            <p>{{ number_format($product->price) }} сум</p>
                        @endif
                    </div>
                    <div class="installment">
                        <span>В рассрочку от </span>
                        <a href="{{ url('/installment') }}"><p>« {{ $product->calculate() }} сум/мес »</p></a>
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

                <div class="mattrasses__prices">
                    <div class="items">
                        <h4>Длина 1900 мм</h4>
                        <div class="items__title">
                            <p>Ширина</p><span class="line"> </span>
                        </div>
                        @foreach ($sames as $item)
                            @if ($item->length == 1900)
                                <div class="items__prices">
                                    <div class="items__one col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                        <p>{{ $item->width }}</p>
                                        <span>{{ $item->price }} сум</span>
                                        <form action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="title" value="{{ $product->title }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="sale" value="{{ $product->sale }}">
                                            <button type="submit" class="add"><img src="../../assets/img/basket/basket_icon_add.svg"></button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="items">
                        <h4>Длина 1950 мм</h4>
                        <div class="items__title">
                            <p>Ширина</p><span class="line"> </span>
                        </div>
                        @foreach ($sames as $item)
                            @if ($item->length == 1950)
                                <div class="items__prices">
                                    <div class="items__one col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                        <p>{{ $item->width }}</p>
                                        <span>{{ $item->price }} сум</span>
                                        <form action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="title" value="{{ $product->title }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="sale" value="{{ $product->sale }}">
                                            <button type="submit" class="add"><img src="../../assets/img/basket/basket_icon_add.svg"></button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="items">
                        <h4>Длина 2000 мм</h4>
                        <div class="items__title">
                            <p>Ширина</p><span class="line"> </span>
                        </div>
                        @foreach ($sames as $item)
                            @if ($item->length == 2000)
                                <div class="items__prices">
                                    <div class="items__one col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                        <p>{{ $item->width }}</p>
                                        <span>{{ $item->price }} сум</span>
                                        <form action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="title" value="{{ $product->title }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="sale" value="{{ $product->sale }}">
                                            <button type="submit" class="add"><img src="../../assets/img/basket/basket_icon_add.svg"></button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>


                <div class="tabs">
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
                                <div class="advantages">
                                    <div class="item">
                                        <img src="/assets/img/goods/innergoodselements/eco.svg" alt="">
                                        <p>Экологически чистые материалы</p>
                                    </div>
                                    <div class="item">
                                        <img src="/assets/img/goods/innergoodselements/shipped.svg" alt="">
                                        <p>Удобная доставка в ваш город</p>
                                    </div>
                                    <div class="item">
                                        <img src="/assets/img/goods/innergoodselements/review.svg" alt="">
                                        <p>Честные отзывы о товаре</p>
                                    </div>
                                    <div class="item">
                                        <img src="/assets/img/goods/innergoodselements/credit-card.svg" alt="">
                                        <p>Возможность оплаты картой</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">
                            <p>
                                {!! $product->description !!}
                            </p>
                            {{-- <h3>текстуры</h3>
                            <div class="texture">
                                <img src="/assets/img/collections/beds/raminibosco/texture.png" >
                            </div>
                            <p class="front">
                                Корпус и фасад: Ясень Aveiro Esche декапе
                            </p> --}}
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
                        <a href="{{ url("/singleProductLeft/10/{$collectionItem->id}") }}">
                            <p class="title">{{ $collectionItem->title }}</p>
                            <div class="img">
                                <img src="{{asset('uploads/products/'). '/'. $collectionItem->image }}">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от {{ $collectionItem->sale != 0 ? ($collectionItem->price / 100) * $collectionItem->sale : $collectionItem->price }} сум
                                    @if ($collectionItem->note != null)
                                    <div class="more">?<span>{{ $collectionItem->note }}</span></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="goodinnercarousel owl-carousel">
                        @foreach ($similarProducts as $item)
                        <div class="sub-content col-xl-12 col-12">
                            <div class="goodscard">
                                <div class="img">
                                    <a href="{{ url("/singleProductRight/{$category->id}/{$item->id}") }}" class="goodsimg-main">
                                        <img src="{{asset('uploads/products/'). '/'. $item->image }}" class="main_img">
                                        <div class="img_markers">
                                            <img src="/assets/img/goods/beds/item (2).jpg" alt=""
                                                class="img_item1">
                                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                                class="img_item2">
                                        </div>
                                        <div class="stock">
                                            @if ($item->sale !=0)
                                                <span>-{{ $item->sale }}%</span>
                                            @endif
                                            @if ($item->sale !=0)
                                                <p>Распродажа</p>
                                            @endif
                                        </div>
                                </div>
                                <div class="desc">
                                    <a href="{{ url("/singleProductRight/{$category->id}/{$item->id}") }}">
                                        <p class="title">{{ $item->title }}</p>
                                        @if ($item->code != null)
                                            <p class="code">Код: {{ $item->code }}</p>
                                        @endif
                                        <p class="gooddesc">{!! $item->description !!}и </p>
                                        <div class="size">
                                            @if ($item->width != null)
                                                <p>Ш: {{ $item->width }}</p>
                                            @endif
                                            @if ($item->length != null)
                                                <p>Д: {{ $item->length }}</p>
                                            @endif
                                            @if ($item->height != null)
                                                <p>В: {{ $item->height }}</p>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="order">
                                        <div class="price">
                                            <span>{{ $item->sale != 0 ? ($item->price / 100) * $item->sale : $item->price }} сум</span>
                                            @if ($item->sale != 0)
                                                <p>{{ $item->price }} сум</p>
                                            @endif
                                        </div>
                                        <form action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="title" value="{{ $product->title }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="sale" value="{{ $product->sale }}">
                                            <button type="submit" class="add">Купить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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