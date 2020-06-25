<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
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
    <link rel="stylesheet" href="/assets/style/our__shops.css">
    <link rel="stylesheet" href="/assets/style/payment.css">
    <link rel="stylesheet" href="/assets/style/question.css">
    <link rel="stylesheet" href="/assets/style/sertificates.css">
    <link rel="stylesheet" href="/assets/style/vacancy.css">
    <link rel="stylesheet" href="/assets/style/wearechoosen.css">
    <link rel="stylesheet" href="/assets/style/stocks.css">
    <link rel="stylesheet" href="/assets/style/main.css">
    <title>Alpha Mebel</title>
</head>
<body>

    @include('header')

    @yield('content')

    @include('footer')


<script src="/assets/script/jquery-3.4.1.min.js"></script>
<script src="/assets/script/owl.carousel.min.js"></script>
<script src="/assets/script/jquery.lazyload.min.js"></script>
<script src="/assets/script/jquery.mask.js"></script>
<script src="/assets/script/bootstrap.min.js"></script>
<script src="/assets/script/carousel.js"></script>
<script src="/assets/script/common.js"></script>
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
</script>
</body>

</html>