@extends('layout')


@section('content')

<product-wardobes-component 
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"
:credit="{{ $credit }}"
></product-wardobes-component>
@endsection