<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/style/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/style/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/style/about.css">
    <link rel="stylesheet" href="/assets/style/dealers.css">
    <link rel="stylesheet" href="/assets/style/delivery.css">
    <link rel="stylesheet" href="/assets/style/offer_contract.css">
    <link rel="stylesheet" href="/assets/style/installment.css">
    <link rel="stylesheet" href="/assets/style/managers.css">
    <link rel="stylesheet" href="/assets/style/ourBrands.css">
    <link rel="stylesheet" href="/assets/style/payment.css">
    <link rel="stylesheet" href="/assets/style/question.css">
    <link rel="stylesheet" href="/assets/style/sertificates.css">
    <link rel="stylesheet" href="/assets/style/vacancy.css">
    <link rel="stylesheet" href="/assets/style/wearechoosen.css">
    <link rel="stylesheet" href="/assets/style/stocks.css">
    <link rel="stylesheet" href="/assets/style/collection.css?v=4">
    <link rel="stylesheet" href="/assets/style/main.css?v=4">
    <link rel="stylesheet" href="/assets/style/goods.css?v=4">
    <link rel="stylesheet" href="/assets/style/basket.css">
    <link rel="stylesheet" href="/assets/style/catalogs.css">
    <link rel="stylesheet" href="/assets/style/ideas.css">
    <link rel="stylesheet" href="/assets/style/virtual_design.css">
    <link rel="stylesheet" href="/assets/style/sales.css">
    <link rel="stylesheet" href="/assets/style/search.css">
    <link rel="stylesheet" href="/assets/style/mattrasses.css">
		@stack('styles')
		<style>
			/*--------------------------------------- PAGINATION -----------------------------------------*/
		.pagination {
			margin-top: 1rem;
			margin-bottom: 1rem;
		}
		.page-item.active .page-link {
			color: #555;
			background-color: #F7D917;
			border-color: #F7D917;
		}
		.page-link {
			position: relative;
			display: block;
			padding: .5rem .75rem;
			margin-left: -1px;
			line-height: 1.25;
			color: #555;
			background-color: #fff;
			border: 0 solid #dee2e6;
		}
		.page-link:hover {
			color: #555;
			background-color: #ecf0f3;
			border-color: #e5e5e5;
		}
		.pagination li {
			margin-left: .3125rem;
		}
		*:focus {
			outline: none;
		}
		</style>
    <title>Шатура-мебель</title>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMNQCSP');</script>
<!-- End Google Tag Manager -->


<!-- Marquiz script start -->
<script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  Marquiz.init({ 
    host: '//quiz.marquiz.ru', 
    id: '5f672379fd10f300442b6c53', 
    autoOpen: 12, 
    autoOpenFreq: 'once', 
    openOnExit: false 
  });
});
</script>
<!-- Marquiz script end -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMNQCSP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">

        @include('header')

        @yield('content', $credit)
    
        @include('footer')

    </div>

<script src="{{  asset('js/app.js?v=4')}}"></script>
<script src="/assets/script/jquery-3.4.1.min.js"></script>
<script src="/assets/script/jquery.lazyload.min.js"></script>
<script src="/assets/script/jquery.mask.js"></script>
<script src="/assets/script/bootstrap.min.js"></script>
<script src="/assets/script/owl.carousel.min.js"></script>
<script src="/assets/script/carousel.js"></script>
<script src="/assets/script/common.js"></script>
<script src="/assets/script/tabs.js"></script>
<script src="/assets/script/loadmore.js"></script>

<script>
    $(document).ready(function () {
        $(".headercarousel").owlCarousel({
            items: 1,
            dots: true,
            loop: false,
            autoplay: false,
            smartSpeed: 1000,
            nav: true,
            mouseDrag: true,
            touchDrag: true
        });
    });
    (function(){
        const  classname = document.querySelectorAll('.quantity')
        Array.from(classname).forEach(function(element){
            element.addEventListener('change', function(){
                const id = element.getAttribute('data-id')
                
                console.log(this.value, id, 1);
                axios.patch('/cart/update', {
                    quantity: this.value,
                    prodid: id,
                }).then(function (response) {
                    //console.log(success);
                    window.location.href = '{{route('cart')}}'
                }).catch(function (error) {
                    console.log(error);
                });
            })
        })
    })();
</script>
</body>

</html>