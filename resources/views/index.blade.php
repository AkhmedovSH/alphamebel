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
                <a href="{{ url('products/' .  10) }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/bedroom.svg">
                    <img class="hover" src="assets/img/product-elements/bedroom-hover.svg">
                    <p>спальни</p>
                </a>
                <a href="{{ url('products/' .  11) }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/guest-hall.svg">
                    <img class="hover" src="assets/img/product-elements/guest-hall-hover.svg">
                    <p>гостиные</p>
                </a>
                <a href="{{ url('products/' .  12) }}" class="products__collection-row-item">
                    <img src="assets/img/product-elements/kids-room.svg">
                    <img class="hover" src="assets/img/product-elements/kids-room-hover.svg">
                    <p>детские</p>
                </a>
                <a href="{{ url('products/' .  13) }}" class="products__collection-row-item">
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
                <a href="{{ url('beds/' .  20) }}" class="products__single-row-item">
                    <img src="assets/img/product-elements/bed.svg">
                    <img class="hover" src="assets/img/product-elements/bed-hover.svg">
                    <p>кровати</p>
                </a>
                <a href="{{ url('wardobes/' .  17) }}" class="products__single-row-item">
                    <img src="assets/img/product-elements/wardrobe.svg">
                    <img class="hover" src="assets/img/product-elements/wardrobe-hover.svg">
                    <p>шкаФЫ</p>
                </a>
                <a href="{{ url('comods/' .  18) }}" class="products__single-row-item">
                    <img src="assets/img/product-elements/commode.svg">
                    <img class="hover" src="assets/img/product-elements/commode-hover.svg">
                    <p>КОМОДЫ</p>
                </a>
                <a href="{{ url('chairs/' .  19) }}" class="products__single-row-item">
                    <img src="assets/img/product-elements/chair.svg">
                    <img class="hover" src="assets/img/product-elements/chair-hover.svg">
                    <p>СТОЛЫ И СТУЛЬЯ</p>
                </a>
                <a href="{{ url('sofas/' .  16) }}" class="products__single-row-item">
                    <img src="assets/img/product-elements/sofa.svg">
                    <img class="hover" src="assets/img/product-elements/sofa-hover.svg">
                    <p>МЯГКАЯ МЕБЕЛЬ</p>
                </a>
                <a href="{{ url('mattress/' .  21) }}" class="products__single-row-item">
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
                <a href="/projectsFlat">ГОТОВЫЕ РЕШЕНИЯ</a>
            </div>
        </div>
    </div>
    <div class="virtualdesign">
        <div class="container">
            <div class="desc col-xl-7 col-lg-7 col-md-6">
                <h2>Виртуальный дизайнер онлайн</h2>
                <p>Загрузи рисунок комнаты от руки и получи бесплатный 3D-проект от дизайнера!</p>
                <a href="/virtualDesign">ОТПРАВИТЬ РИСУНОК</a>
            </div>
            <img class="col-xl-4 col-lg-4 col-md-4" src="assets/img/main/virtual.png">
        </div>
    </div>
    <div class="feedbacks container">
        <h2>Отзывы</h2>
        <div id="feedbacks-carousel" class="owl-carousel feedbacks__row">
            <div class="feedbacks__row-item">
                <a target="_blank" href="https://www.instagram.com/p/CFWgCyipmA_/?utm_source=ig_web_copy_link">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/instagramfeed/1.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Какой на самом деле должна быть качественная мебель? На этот вопрос наш эксперт подготовил для вас несколько советов и полезных рекомендаций о которых вы узнаете из видео.
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/elements/shatura-logo.svg">
                            <p>@shatura.uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a target="_blank" href="https://www.instagram.com/tv/CEnmbf_JDkF/?utm_source=ig_web_copy_link">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/instagramfeed/2.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Почувствуйте атмосферу Италии у себя дома с новой мебелью "Rimini" Всё разнообразие и многогранность Италии воплотилось итальянским дизайнером в палитре цветовых решений ...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/elements/shatura-logo.svg">
                            <p>@shatura.uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a target="_blank" href="https://www.instagram.com/p/CFeKu9nJ1_3/?utm_source=ig_web_copy_link">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/instagramfeed/3.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Что можно сказать о современных коллекциях мебели Шатура? Всех их можно коротко описать одним словом "Rimini" Смотрите ролик чтобы узнать всё подробнее.
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/elements/shatura-logo.svg">
                            <p>@shatura.uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a target="_blank" href="https://www.instagram.com/p/B-_S6c3icxy/?utm_source=ig_web_copy_link">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/instagramfeed/4.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">К выбору матрасов нужно подходить очень серьезно. От матраса зависит то, насколько качественный у вас будет сон. А от того, насколько качественный будет сон зависит ваше благополучие ...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/elements/shatura-logo.svg">
                            <p>@shatura.uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a target="_blank" href="https://www.instagram.com/p/CEx88J8p7TR/?utm_source=ig_web_copy_link">
                    <div class="feedbacks__row-item-img">
                        <img src="assets/img/instagramfeed/5.jpg">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Какой должна быть хорошая мебель для молодёжной комнаты? 🔥Давайте узнаем у самого молодого поколения!</p>
                        <div class="feed-person">
                            <img src="assets/img/elements/shatura-logo.svg">
                            <p>@shatura.uz</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="leaveapp">
        <div class="container">
            <h2>ОСТАВИТЬ ЗАЯВКУ</h2>
            <form action="/sendRequest" method="POST" class="col-xl-8">
                @csrf
                <input type="hidden" name="section" value="submit_your_application">
                <input type="text" name="name" placeholder="Имя" required>
                <input type="number" name="phone" placeholder="Номер телефона" required>
                <textarea name="comment" id="" cols="30" rows="10" placeholder="Комментарий"></textarea>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</main>
@endsection