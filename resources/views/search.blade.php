@extends('layout')

@section('content')
<section class="search container">
    <div class="search_input">
        <h1>Поиск</h1>
        <form action="" class="search__form">
            <input type="text" placeholder="Поиск" required>
            <button type="submit" class="search__button">
                <img src="/assets/img/search/search__icon.svg" alt="">
            </button>
        </form>
    </div>


</section>

<section class="container">
    <span class="search_title">Результаты поиска</span>
    @foreach ($collection as $product)
    <div class="single-products col-xl-12">
        <a class="col-xl-3 col-lg-4 col-md-6 col-sm-12" href="goods/beds/bed1.html">
            <div class="card">
                <div class="img">
                    <img src="/assets/img/goods/beds/beds.jpg" alt="">
                    <p class="discount">-10%</p>
                    <p class="sale">Распродажа</p>
                </div>
                <div class="title">
                    <p class="title">{{ $product->title }}</p>
                    <p class="code">Код: {{ $product->code }}</p>
                </div>
                <div class="size">
                    <p>Ш: {{ $product->width }}</p>
                    <p>Д: {{ $product->length }}</p>
                    <p>В: {{ $product->height }}</p>
                </div>
                <div class="order">
                    <div class="price">
                        <p>{{ $product->sale != 0 ? number_format($product->price - (($product->price / 100) * $product->sale), 0) : $product->price }} сум</p>
                        <p>{{ number_format($product->price) }} сум</p>
                    </div>
                    <button>КУПИТЬ</button>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</section>
@endsection