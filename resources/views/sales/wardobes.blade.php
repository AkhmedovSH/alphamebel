@extends('layout')

@section('content')
<main>
	<div class="sales container">
		<div class="primary-fliter col-xl-3 col-lg-3 col-md-2 col-sm-2 col-12">
			<h1 class="sales-primary-filter-open">Предметы мебели</h1>
			<ul class="primary-filter-list">
				<li><a href="{{ url('sale/sofas/' .  16) }}">Мягкая мебель</a></li>
				<li><a href="{{ url('sale/wardobes/' .  17) }}">Шкафы</a></li>
				<li><a href="{{ url('sale/comods/' .  18) }}">Комоды</a></li>
				<li><a href="{{ url('sale/chairs/' .  19) }}">Столы и стулья</a></li>
				<li><a href="{{ url('sale/beds/' .  20) }}">Кровати</a></li>
				<li><a href="{{ url('sale/mattress/' .  21) }}">Матрасы</a></li>
			</ul>
		</div>
		<div class="single-goods container">
			<div id="goodswrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="cards contents">
					@foreach ($products as $product)
					<div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
						<div class="goodscard content">
							<div class="img">
									<div class="goodsimg-main card_main">
											<img src="{{asset('uploads/products/'). '/'. $product->image }}" class="main_img">
									</div>
									<div class="img_markers">
											@if($product->images != null)
													@foreach (json_decode($product['images']) as $item)
													<div class="mainslider-sub-img">
															<img src="{{ asset('uploads/products/'). '/'. $item->image }}" class="img_item1">
													</div>
													@endforeach
											@endif
									</div>
									<div class="stock">
										@if ($product->sale !=0)
											<span>-{{ $product->sale }}%</span>
										@endif
										@if ($product->sale !=0)
											<p>Распродажа</p>
										@endif
									</div>
							</div>
							<div class="desc">
									<a href="#">
											<p class="title">{{ $product->title }}</p>
											<p class="code">Код: {{ $product->code }}</p>
											<div class="size">
													@if ($product->width != null)
															<p>Ш: {{ $product->width }}</p>
													@endif
													@if ($product->length != null)
															<p>Д: {{ $product->length }}</p>
													@endif
													@if ($product->height != null)
															<p>В: {{ $product->height }}</p>
													@endif
											</div>
									</a>
									<div class="order">
											<div class="price text-nowrap">
												@if ($product->sale == 0)

														<strong>{{ number_format($product->price - (($product->price / 100) * $product->sale), 0,","," ") }} сум</strong>

												@else

														<strong>{{ number_format($product->price, 0,","," ") }} сум</strong>

												@endif
											</div>
											{{-- <a href="'/singleProductRight/' + category.id + '/' + product.id" class="add">КУПИТЬ</a> --}}
											<a href="{{ url("/singleProductRight/{$product->category_id}/{$product->id}") }}" class="add">КУПИТЬ</a>
									</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</main>
@endsection