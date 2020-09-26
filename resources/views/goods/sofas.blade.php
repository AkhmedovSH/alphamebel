@extends('layout')



@section('content')
<product-sofas-component
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"

:products2="{{ $products2 }}" 
:filters2="{{ $filters2 }}" 
:category2="{{ $category2 }}" 
:attributes2="{{ $attributes2 }}"

:products3="{{ $products3 }}" 
:filters3="{{ $filters3 }}" 
:category3="{{ $category3 }}" 
:attributes3="{{ $attributes3 }}"

:products4="{{ $products4 }}" 
:filters4="{{ $filters4 }}" 
:category4="{{ $category4 }}" 
:attributes4="{{ $attributes4 }}"

:credit="{{ $credit }}"
></product-sofas-component>
@endsection