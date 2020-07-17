@extends('layout')


@section('content')

@if (isset($weRecallText))
    <h1>{{ $weRecallText }}</h1>
@else
    <h1>Оплата прошла успешно ожидайте обратного звонка</h1>
@endif


@endsection