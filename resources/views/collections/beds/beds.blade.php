@extends('layout')


@section('content')

<product-component 
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"
:credit="{{ $credit }}"
></product-component>
@endsection