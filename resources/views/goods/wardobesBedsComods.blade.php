@extends('layout')


@section('content')

<product-wardobes-beds-comads-component 
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"
:credit="{{ $credit }}"
></product-wardobes-beds-comads-component>
@endsection