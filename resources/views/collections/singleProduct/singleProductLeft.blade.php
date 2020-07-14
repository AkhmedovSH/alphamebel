@extends('layout')


@section('content')
<main>
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
    <div class="collections-inside container">
        <div class="title col-12">
            <h1>{{ $product->title }}</h1>
        </div>
        <div class="about-item">
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
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
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
                                <img src="/assets/img/collections/beds/raminibosco/texture.png" alt="">
                            </div>
                            <p class="front">
                                Корпус и фасад: Ясень Aveiro Esche декапе
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-products col-xl-12">
            <div class="cards contents">
                @foreach ($similarProducts as $item)
                <div class="sub-content col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="goodscard content">
                        <div class="img">
                            <a href="{{ url("/singleProductLeft/{$category->id}/{$item->id}") }}" class="goodsimg-main card_main">
                                <img src="{{asset('uploads/products/'). '/'. $product->image }}" class="main_img">
                            </a>
                            <div class="img_markers">
                                @if($item->two_images != null)
                                    @foreach (json_decode($item['two_images']) as $item)
                                    <img src="{{ asset('uploads/products/'). '/'. $item->image }}" class="img_item1">
                                    @endforeach
                                @endif
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
                            <a href="{{ url("/singleProductLeft/{$category->id}/{$item->id}") }}">
                                <p class="title">{{ $item->title }}</p>
                                <p class="code">Код: {{ $item->code }}</p>
                                <p class="gooddesc">{!! $item->description !!}</p>
                                <div class="size">
                                    <p>Ш: {{ $item->width }}</p>
                                    <p>Д: {{ $item->length }}</p>
                                    <p>В: {{ $item->height }}</p>
                                </div>
                            </a>
                            <div class="order">
                                <div class="price">
                                    <p>{{ $item->sale != 0 ? number_format($item->price - (($item->price / 100) * $item->sale), 0) : $item->price }} сум</p>
                                    <p>{{ number_format($item->price) }} сум</p>
                                </div>
                                <form action="/cart" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="hidden" name="title" value="{{ $item->title }}">
                                    <input type="hidden" name="price" value="{{ $item->price }}">
                                    <input type="hidden" name="sale" value="{{ $item->sale }}">
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

    <div id="addedToBasket">
        <p>Товар добавлен в корзину</p>
        <div id="addedItemClose">
            <img src="/assets/img/elements/menu-close-white.svg" alt="">
        </div>
    </div>

</main>
@endsection