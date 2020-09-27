@extends('layout')

@section('content')
<section class="search container">
    <div class="search_input">
        <h1>Поиск</h1>
        <form class="search__form" action="/search" method="post">
            @csrf
            <input type="text" name="text" placeholder="Поиск...">
            <button type="submit" class="search__button">
                <img src="/assets/img/search/search__icon.svg" alt="">
            </button>
        </form>
    </div>
</section>



<section class="container">
    <span class="search_title">Результаты поиска</span>
    @if (count($data) > 0)
    <div class="single-products col-xl-12">
        @foreach ($data as $product)
            <a class="col-xl-3 col-lg-4 col-md-6 col-sm-12" 
            @if ($product->isCollection != 0)
                href="{{route('singleProductLeft', ['category_id' => $product->category_id, 'product_id' => $product->id ])}}"
                @else
                href="{{route('singleProductRight', ['category_id' => $product->category_id, 'product_id' => $product->id ])}}"
            @endif
            >
                <div class="card">
                    <div class="img">
                        <img src="{{asset('uploads/products/'). '/'. $product->image }}">
                        @if ($product->sale != 0)
                            <p class="discount">-{{ $product->sale }}%</p>
                            <p class="sale">Распродажа</p>
                        @endif
                    </div>
                    <div class="title">
                        <p class="title">{{ $product->title }}</p>
                        @if ($product->code != null)
                            <p class="code">Код: {{ $product->code }}</p>
                        @endif
                    </div>
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
                    <div class="order">
                        <div class="price text-nowrap">
                            <span>{{ $product->sale != 0 ? number_format($product->price - (($product->price / 100) * $product->sale), 0) : $product->price }} сум</span>
                            @if ($product->sale != 0)
                                <p>{{ number_format($product->price) }} сум</p>
                            @endif
                        </div>
                        @if ($product->isCollection != 1)
                            <form action="/cart" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="title" value="{{ $product->title }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="hidden" name="sale" value="{{ $product->sale }}">
                                <button type="submit" class="add">КУПИТЬ</button>
                            </form>
                        @else
                            <button type="submit" class="add">Выбрать</button>
                        @endif
                        
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @else
    <h1 class="text-center">Ничиго не найдено</h1>
    @endif
</section>
@endsection