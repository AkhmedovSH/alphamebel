@extends('layout')





@section('content')

<section class="offer__contract container">

    <h1>Поставщикам</h1>

    <p style="font-weight: 700;">
        Приглашаем к сотрудничеству по дистрибуции мебели и сопутствующих товаров на территории Узбекистана. Если вы являетесь производителем, желающим выйти на рынок Узбекистана и быть представленным в крупной, динамично растущей сети, мы будем рады рассмотреть совместное сотрудничество.
    </p>

</section>

<div class="join-form container">

    <div class="contacts col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        <p>Контакты:</p>

        <div>

            <img src="/assets/img/managers/Rectangle 103-2.jpg" alt="">

            <div class="about">

                <p>Рустам Маннанов</p>

                <span>Директор</span>

                <p>

                    <a href="tel:+998901214445">+99890 121 44 45</a>

                    <a href="https://web.telegram.org/">

                        <img src="/assets/img/dealers/telegram_logo.svg" alt="">

                    </a>

                </p>

            </div>

        </div>

    </div>

		<form class="col-xl-7 col-lg-8 col-md-8 col-sm-12 col-12"  action="/sendRequest" method="POST">
				@csrf
        <h2>Стать партнёром</h2>

        <input type="text" placeholder="Имя" name="name" required>

        <input type="number" placeholder="Номер телефона" name="phone" required>

				<input type="text" placeholder="Сообщение" name="comment"> 
				<input type="hidden" name="section" value="suppliers">

        <button type="submit">Отправить</button>

    </form>

</div>

@endsection