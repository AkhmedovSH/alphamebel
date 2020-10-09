@extends('layout')





@section('content')



<product-component 

:products="{{ $products }}" 

:filtersz="{{ $filters }}" 

:category="{{ $category }}" 

:attributes="{{ $attributes }}"

:credit="{{ $credit }}"

></product-component>

@endsection