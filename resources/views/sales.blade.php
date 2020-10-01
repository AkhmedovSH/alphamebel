@extends('layout')

@section('content')
<main>
    <div class="sales container">
        <div class="primary-fliter col-xl-3 col-lg-3 col-md-2 col-sm-2 col-12">
            <h1 class="sales-primary-filter-open">Предметы мебели</h1>
            <ul class="primary-filter-list">
								<li><a href="{{ url('sofas/' .  16) }}">Мягкая мебель</a></li>
                <li><a href="{{ url('wardobes/' .  17) }}">Шкафы</a></li>
                <li><a href="{{ url('comods/' .  18) }}">Комоды</a></li>
                <li><a href="{{ url('chairs/' .  19) }}">Столы и стулья</a></li>
                <li><a href="{{ url('beds/' .  20) }}">Кровати</a></li>
                <li><a href="{{ url('mattress/' .  21) }}">Матрасы</a></li>
            </ul>
				</div>
        <div class="tabs single-fliter w-100">
            <h1 class="sales-single-filter-open">Коллекции</h1>
            <ul class="tabs__caption single-filter-list container">
                <li class="active tables col-xl-2">
                    спальни
                </li>
                <li class="chairs col-xl-2">
                    гостиные
                </li>
                <li class="chairs col-xl-2">
                    детские
                </li>
                <li class="chairs col-xl-2">
                    прихожие
                </li>
                <li class="chairs col-xl-3">
                    офисы
                    и гостиницы
                </li>
                </li>
                <li class="chairs col-xl-2">
                    кухни
                </li>
            </ul>
            <div class="tabs__content active">
                <div class="single-goods container">
                    <div id="goodswrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cards contents">
                            @foreach ($data as $product)
                            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="goodscard content">
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
                                        <div class="stock">
                                            <span>-10%</span>
																						<p>Распродажа</p>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <a href="#">
                                            <p class="title">{{ $product->title }}</p>
                                            <p class="code">Код: {{ $product->code }}</p>
                                            <p class="gooddesc">{!! $product->description !!}</p>
                                            <div class="size">
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
                                        </a>
                                        <div class="order">
                                            <div class="price text-nowrap">
                                                <p>{{ $product->sale != 0 ? number_format($product->price - (($product->price / 100) * $product->sale), 0) : $product->price }} сум</p>
                                                <p>{{ number_format($product->price) }} сум</p>
                                            </div>
                                            <button class="add">КУПИТЬ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="more">
                            <button class="loadMore">
                                ПОКАЗАТЬ ЕЩЕ ТОВАРЫ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs__content">
                <div class="single-goods container">
                    <div id="goodswrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cards contents">
                            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="goodscard content">
                                    <div class="img">
                                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                                        </a>
                                        <div class="img_markers">
                                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="img_item1">
                                            <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                                        </div>
                                        <div class="stock">
                                            <span>-10%</span>
                                            <p>Распродажа</p>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <a href="../beds/bed1.html">
                                            <p class="title">2 Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                                            <p class="code">Код: 484700</p>
                                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                                Флоренция,
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
                            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="goodscard content">
                                    <div class="img">
                                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                                        </a>
                                        <div class="img_markers">
                                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="img_item1">
                                            <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                                        </div>
                                        <div class="stock">
                                            <span>-10%</span>
                                            <p>Распродажа</p>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <a href="../beds/bed1.html">
                                            <p class="title">2 Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                                            <p class="code">Код: 484700</p>
                                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                                Флоренция,
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
                            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="goodscard content">
                                    <div class="img">
                                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                                        </a>
                                        <div class="img_markers">
                                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="img_item1">
                                            <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                                        </div>
                                        <div class="stock">
                                            <span>-10%</span>
                                            <p>Распродажа</p>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <a href="../beds/bed1.html">
                                            <p class="title">2 Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                                            <p class="code">Код: 484700</p>
                                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                                Флоренция,
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
                        <div class="more">
                            <button class="loadMore">
                                ПОКАЗАТЬ ЕЩЕ ТОВАРЫ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection