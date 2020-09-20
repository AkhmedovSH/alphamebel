@extends('layout')


@section('content')
<main>
    <div class="dealers container p-0">
        <div class="img col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <img src="/assets/img/dealers/main.jpg" alt="">
        </div>
        <div class="desc col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
            <div class="title">
                <h1 class="col-xl-4 col-lg-3 col-md-3 col-sm-3 col-12">СТАТЬ ДИЛЕРОМ</h1>
            </div>
            <p class="col-xl-9 col-lg-10 col-md-10 col-sm-10 col-12">Мы рады сотрудничать с компаниями, разделяющими
                наши цели и
                приоритеты,
                готовыми
                обеспечить взаимовыгодное сотрудничество. Если вы ищете надежных партнеров, то вы обратились по
                адресу.</p>
            <div class="manager col-auto">
                <p>СВЯЖИТЕСЬ С МЕНЕДЖЕРОМ ДЛЯ УТОЧНЕНИЯ ДЕТАЛЕЙ</p>
                <img src="/assets/img/payment/arrow.svg" alt="">
            </div>
        </div>
    </div>
    <div class="join-form container">
        <div class="contacts col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <p>Контакты:</p>
            <div>
                <img src="/assets/img/dealers/manager1.jpg" alt="">
                <div class="about">
                    <p>Залознов Олег</p>
                    <span>Коммерческий директор</span>
                    <p>
                        <a href="tel:+998909920034">+99890 992 00 34</a>
                        <a href="https://web.telegram.org/">
                            <img src="/assets/img/dealers/telegram_logo.svg"alt="">
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <form class="col-xl-7 col-lg-8 col-md-8 col-sm-12 col-12" action="/sendRequest" method="POST">
            @csrf
            <h2>ХОЧУ ПРИСОЕДИНИТЬСЯ!</h2>
            <input type="hidden" name="section" value="dealers">
            <input type="text" placeholder="Имя" name="name" required>
            <input type="number" placeholder="Номер телефона" name="phone" required>
            <button type="submit">Отправить</button>
        </form>
    </div>

</main>
@endsection