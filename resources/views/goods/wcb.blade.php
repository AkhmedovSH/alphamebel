@extends('layout')


@section('content')

<product-right-wcb-component 
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"
:credit="{{ $credit }}"
></product-right-wcb-component>
@endsection