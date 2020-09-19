@extends('layout')


@section('content')
<section class="stocks_inner container">
    <h1>{{ $post->title }}</h1>
    {!! $post->content !!}

    <div class="stock_photo">
        <img src="{{asset('uploads/posts/'). '/'. $post->image }}">
    </div>
</section>
@endsection