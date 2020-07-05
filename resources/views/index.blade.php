@extends('layout')


@section('content')

<div class="header-carousel container">
    <div class="headercarousel owl-carousel">
        @foreach ($sliders as $item)
        <div class="headercarouselslide">
            <img src="{{ asset('uploads/slider/') . '/' . $item->image}}" class="d-block w-100" alt="...">
            <a class="morelink" href="{{ $item->url }}">Подробнее</a>
        </div>
        @endforeach
    </div>
</div>

<main class="main">
    <div class="stocks container">
        <h2>Акции и скидки</h2>
        <div id="stocks-carousel" class="owl-carousel stocks__row">
            @foreach ($posts as $item)
            <div class="stocks__row-item">
                <a href="{{ route('stock_inner', [ $item->slug ]) }}">
                    <div class="stocks__row-item-img">
                        <img src="{{ asset('uploads/posts/') . '/' . $item->image}}">
                    </div>
                    <div class="stocks__row-item-desc">
                        <div class="desc">
                            <p class="stockflag">Акция</p>
                            <p class="date"><img src="assets/img/elements/clock.svg"> до 11 мая</p>
                        </div>
                        <p class="title">Весна! Время покупать!</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="products container">
        <div class="products__collection col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h2>Коллекции</h2>
            <p>Мебель в одном стиле, цвете и фактуре</p>
            <div class="products__collection-row">
                <a href="{{ url('beds/' .  10) }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/bedroom.svg">
                    <img class="hover" src="assets/img/product-elements/bedroom-hover.svg">
                    <p>спальни</p>
                </a>
                <a href="{{ url('livingRooms/' .  11) }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/guest-hall.svg">
                    <img class="hover" src="assets/img/product-elements/guest-hall-hover.svg">
                    <p>гостиные</p>
                </a>
                <a href="{{ url('nursery/' .  12) }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/kids-room.svg">
                    <img class="hover" src="assets/img/product-elements/kids-room-hover.svg">
                    <p>детские</p>
                </a>
                <a href="{{ url('halls/' .  13) }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/hall.svg">
                    <img class="hover" src="assets/img/product-elements/hall-hover.svg">
                    <p>прихожие</p>
                </a>
                <a href="{{ url('offices') }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/office.svg">
                    <img class="hover" src="assets/img/product-elements/office-hover.svg">
                    <p>офисы и гостиницы</p>
                </a>
                <a href="/kitchens" class="products__collection-row-item">
                    <img src="assets/img/product-elements/kitchen.svg">
                    <img class="hover" src="assets/img/product-elements/kitchen-hover.svg">
                    <p>кухни</p>
                </a>
            </div>
        </div>
        <div class="products__single col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h2>Предметы мебели</h2>
            <p>Подбор мебели по фильтрам</p>
            <div class="products__single-row">
                <a href="goods/beds/singlebeds.html" class="products__single-row-item">
                    <img src="assets/img/product-elements/bed.svg">
                    <img class="hover" src="assets/img/product-elements/bed-hover.svg">
                    <p>кровати</p>
                </a>
                <a href="goods/wardrobes/singlewardrobes.html" class="products__single-row-item">
                    <img src="assets/img/product-elements/wardrobe.svg">
                    <img class="hover" src="assets/img/product-elements/wardrobe-hover.svg">
                    <p>шкаФЫ</p>
                </a>
                <a href="goods/comods/singlecomods.html" class="products__single-row-item">
                    <img src="assets/img/product-elements/commode.svg">
                    <img class="hover" src="assets/img/product-elements/commode-hover.svg">
                    <p>КОМОДЫ</p>
                </a>
                <a href="goods/chairs/singlechairs.html" class="products__single-row-item">
                    <img src="assets/img/product-elements/chair.svg">
                    <img class="hover" src="assets/img/product-elements/chair-hover.svg">
                    <p>СТОЛЫ И СТУЛЬЯ</p>
                </a>
                <a href="{{ url('sofas/' .  16) }}" class="products__single-row-item">
                    <img src="assets/img/product-elements/sofa.svg">
                    <img class="hover" src="assets/img/product-elements/sofa-hover.svg">
                    <p>МЯГКАЯ МЕБЕЛЬ</p>
                </a>
                <a href="goods/mattrasses/singlemattress.html" class="products__single-row-item">
                    <img src="assets/img/product-elements/mattress.svg">
                    <img class="hover" src="assets/img/product-elements/mattress-hover.svg">
                    <p>МАТРАСЫ</p>
                </a>
            </div>
        </div>
    </div>
    <div class="designprojects">
        <div class="container">
            <img class="col-xl-4 col-xl-4 col-md-4" src="assets/img/main/project.png">
            <div class="desc col-xl-7 col-lg-7 col-md-7">
                <h2>Дизайн - проекты типовых квартир</h2>
                <p>Мы предлагаем интересные готовые решения для ваших квартир.</p>
                <a href="projectsFlat.html">ГОТОВЫЕ РЕШЕНИЯ</a>
            </div>
        </div>
    </div>
    <div class="virtualdesign">
        <div class="container">
            <div class="desc col-xl-7 col-lg-7 col-md-6">
                <h2>Виртуальный дизайнер онлайн</h2>
                <p>Загрузи рисунок комнаты от руки и получи бесплатный 3D-проект от дизайнера!</p>
                <a href="virtual_design.html">ОТПРАВИТЬ РИСУНОК</a>
            </div>
            <img class="col-xl-4 col-lg-4 col-md-4" src="assets/img/main/virtual.png">
        </div>
    </div>
    <div class="feedbacks container">
        <h2>Отзывы</h2>
        <div id="feedbacks-carousel" class="owl-carousel feedbacks__row">
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback1.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback2.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback2.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback3.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback4.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback4.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback4.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback1.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback1.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback1.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback1.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/feedback1.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="leaveapp">
        <div class="container">
            <h2>ОСТАВИТЬ ЗАЯВКУ</h2>
            <form action="" method="" class="col-xl-8">
                <input type="text" placeholder="Имя" required>
                <input type="number" placeholder="Номер телефона" required>
                <textarea name="" id="" cols="30" rows="10" placeholder="Комментарий"></textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</main>
@endsection