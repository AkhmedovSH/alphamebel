@extends('layout')

@section('content')
<main class="corporate">
    <section class="container">
        <h1>корпоративные решения</h1>
        <div class="corporate-row">
            <div class="card col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                <a href="{{ url('products/' .  22) }}">
                    <h2>Гостиничная мебель</h2>
                    <div class="img">
                        <img src="/assets/img/collections/offices/corporate/corporate1.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="card col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                <a href="{{ url('products/' .  23) }}">
                    <h2>Кабинеты</h2>
                    <div class="img">
                        <img src="/assets/img/collections/offices/corporate/corporate2.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="card col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                <a href="{{ url('products/' .  24) }}">
                    <h2>Мебель для офиса</h2>
                    <div class="img">
                        <img src="/assets/img/collections/offices/corporate/corporate3.jpg" alt="">
                    </div>
                </a>
            </div>
            <div class="card col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                <a href="{{ url('products/' .  25) }}">
                    <h2>Оперативная офисная мебель</h2>
                    <div class="img">
                        <img src="/assets/img/collections/offices/corporate/corporate4.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="special-client">
        <div class="container">
            <img src="/assets/img/collections/offices/corporate/client.svg" alt="">
            <div class="desc">
                <h3>Для нас Вы - особенный клиент, которому мы подберём индивидуальное предложение и предоставим
                    скидку.</h3>
                <p>Наш ассортимент рассчитан на то, чтобы предложить комплексное решение по оборудованию офиса,
                    гостиницы или делового интерьера.</p>
            </div>
        </div>
    </section>
    <section class="advantages container">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <img src="/assets/img/collections/offices/corporate/complex-service.svg" alt="">
            <p>Комплексный сервис</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <img src="/assets/img/collections/offices/corporate/own-manager.svg" alt="">
            <p>Личный менеджер</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <img src="/assets/img/collections/offices/corporate/discount.svg" alt="">
            <p>Скидка до 20% за объем</p>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <img src="/assets/img/collections/offices/corporate/quick.svg" alt="">
            <p>Скидка до 20% за объем</p>
        </div>
    </section>
    <section class="contactmanager container">
        <h2>Вы можете обратиться напрямую к любому специалисту</h2>
        <div class="managers">
            <div class="manager-card col-xl-5 col-lg-6 col-md-6 col-sm-8 col-12">
                <img src="/assets/img/managers/manager1.jpg" alt="">
                <div class="desc">
                    <p>Краснова Ирина</p>
                    <span>Коммерческий директор</span>
                    <a href="tel:+998909920034">+99890 992 00 34</a>
                </div>
            </div>
            <div class="manager-card col-xl-5 col-lg-6 col-md-6 col-sm-8 col-12">
                <img src="/assets/img/managers/manager1.jpg" alt="">
                <div class="desc">
                    <p>Краснова Ирина</p>
                    <span>Коммерческий директор</span>
                    <a href="tel:+998909920034">+99890 992 00 34</a>
                </div>
            </div>
        </div>
    </section>
    <div class="feedbacks container">
        <h2>Отзывы</h2>
        <div id="feedbacks-carousel" class="owl-carousel feedbacks__row">
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback1.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback2.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback2.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback3.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback4.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback4.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback4.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback1.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback1.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback1.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback1.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="feedbacks__row-item">
                <a href="https://www.instagram.com/">
                    <div class="feedbacks__row-item-img">
                        <img src="/assets/img/feedback1.jpg" alt="">
                    </div>
                    <div class="feedbacks__row-item-desc">
                        <p class="feed-text">Персонал магазина работает слаженно,на удивление оперативно. Заказывали
                            обеденный стол и стулья. Через день приехала машина на отгрузку, занесли в квартиру...
                        </p>
                        <div class="feed-person">
                            <img src="assets/img/feedback1.jpg" alt="">
                            <p>alfamebel_uz</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection