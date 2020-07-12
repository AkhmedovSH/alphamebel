@extends('layout')



@section('content')
<product-chairs-component
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"

:products2="{{ $products2 }}" 
:filters2="{{ $filters2 }}" 
:category2="{{ $category2 }}" 
:attributes2="{{ $attributes2 }}"

:credit="{{ $credit }}"
></product-chairs-component>
@endsection