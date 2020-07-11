@extends('layout')



@section('content')
<product-mattress-component
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"
:credit="{{ $credit }}"
></product-mattress-component>
@endsection