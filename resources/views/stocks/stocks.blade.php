@extends('layout')


@section('content')
<section class="stocks container">
  <h1>акции и скидки</h1>

  <div class="stocksrow contents">
      @foreach ($posts as $item)
        <div class="blogBox moreBox col-xl-4 col-lg-4 col-md-4 col-12">
            <a href="{{ route('stock_inner', [ $item->slug ]) }}">
                <div class="stocks__row-item-img">
                    <img src="{{asset('uploads/posts/'). '/'. $item->image }}">
                </div>
                <div class="stocks__row-item-desc">
                    <div class="desc">
                        <p class="stockflag">Акция</p>
                        
                        <p class="date"><img src="assets/img/elements/clock.svg" alt=""> до 11 мая</p>
                    </div>
                    <p class="title">{!! $item->content !!}</p>
                </div>
            </a>
        </div>
      @endforeach
  </div>
  <div class="more">
      <button id="loadMore">
          Показать еще
      </button>
  </div>
</section>
@endsection