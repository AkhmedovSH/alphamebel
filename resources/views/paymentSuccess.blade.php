@extends('layout')


@section('content')

<div class="basket container">
    @if (isset($weRecallText))
        <h1>{{ $weRecallText }}</h1>
    @else
        <h1>Оплата прошла успешно ожидайте обратного звонка</h1>
    @endif
</div>


@endsection