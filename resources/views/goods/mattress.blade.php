@extends('layout')



@section('content')
<product-mattress-component
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

:products5="{{ $products5 }}" 
:filters5="{{ $filters5 }}" 
:category5="{{ $category5 }}" 
:attributes5="{{ $attributes5 }}"

:credit="{{ $credit }}"
></product-mattress-component>
@endsection