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
                            {{-- <h3>текстуры</h3>
                            <div class="texture">
                                <img src="/assets/img/collections/beds/raminibosco/texture.png" alt="">
                            </div>
                            <p class="front">
                                Корпус и фасад: Ясень Aveiro Esche декапе
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-products col-xl-12">
            <div class="cards contents">
                @foreach ($similarProducts as $key => $item)
                <div class="sub-content col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="goodscard content">
                        <div class="img">
                            <a href="{{ url("/singleProductRight/{$category->id}/{$item->id}") }}" class="goodsimg-main card_main">
                                <img src="{{asset('uploads/products/'). '/'. $item->image }}" class="main_img">
                            </a>
                            <div class="img_markers">
                                @if($item->two_images != null)
                                    @foreach (json_decode($item['two_images']) as $item)
                                        <img src="{{ asset('uploads/products/'). '/'. $item->image }}" class="img_item1">
                                    @endforeach
                                @endif
                            </div>
                            <div class="stock">
                                @if ($similarProducts[$key]['sale'] != 0)
                                    <span>-{{ $similarProducts[$key]['sale'] }}%</span>
                                @endif
                                @if ($similarProducts[$key]['sale'] != 0)
                                    <p>Распродажа</p>
                                @endif  
                            </div>
                        </div>
                        <div class="desc">
                            <a href="{{ url("/singleProductRight/{$category->id}/{$similarProducts[$key]['id']}") }}">
                                <p class="title">{{ $similarProducts[$key]['title'] }}</p>
                                @if ($similarProducts[$key]['code'] != null)
                                <p class="code">Код: {{ $similarProducts[$key]['code'] }}</p>
                                @endif
                                <p class="gooddesc">{!! mb_strimwidth($similarProducts[$key]['description'], 0, 150, "...");  !!}</p>
                                <div class="size">
                                    @if ($similarProducts[$key]['width'] != null)
                                        <p>Ш: {{ $similarProducts[$key]['width'] }}</p>
                                    @endif
                                    @if ($similarProducts[$key]['length'] != null)
                                        <p>Д: {{ $similarProducts[$key]['length'] }}</p>
                                    @endif
                                    @if ($similarProducts[$key]['height'] != null)
                                        <p>В: {{ $similarProducts[$key]['height'] }}</p>
                                    @endif
                                </div>
                            </a>
                            <div class="order">
                                <div class="price">
                                    <span>{{ $similarProducts[$key]['sale'] != 0 ? number_format($similarProducts[$key]['price'] - (($similarProducts[$key]['price'] / 100) * $similarProducts[$key]['sale']), 0) : $similarProducts[$key]['price'] }} сум</span>
                                    @if ($similarProducts[$key]['sale'] != 0)
                                        <p>{{ number_format($similarProducts[$key]['price']) }} сум</p>
                                    @endif
                                </div>
                                <form action="/cart" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $similarProducts[$key]['id'] }}">
                                    <input type="hidden" name="title" value="{{ $similarProducts[$key]['title'] }}">
                                    <input type="hidden" name="price" value="{{ $similarProducts[$key]['price'] }}">
                                    <input type="hidden" name="sale" value="{{ $similarProducts[$key]['sale'] }}">
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