@extends('layout')

@section('content')
<main>
    <div class="basket container">
        <form action="" method="">
            <h1 class="col-auto">корзина</h1>
            <p class="client-code col-auto">код клиента: 484700</p>
            <ul>
                <li>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <p>Название товара</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <p>Стоимость</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <p>Количество</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <p>Сумма</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2">
                    </div>
                </li>

                @foreach (Cart::content() as $item)
                <li class="items" >
                    <div class="info col-xl-4 col-lg-4 col-md-4 col-sm-11 col-10">
                        <div class="img " href="#!">
                            <img src="/uploads/products/{{$item->model->image}}" alt="">
                        </div>
                        <div class="name">
                            <p>{{ $item->model->title}}</p>
                            <span>Код: 484700</span>
                        </div>
                    </div>
                    <div class="price col-xl-6 col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="priceinner">
                            <p>5 402 961
                                <span>сум</span>
                            </p>
                            <p class="old-orice">30 345 000 сум</p>
                        </div>
                        <div class="quantity">
                            <button class="remove">-</button>
                            <input type="number" placeholder="0" id="" min="1" max="15" required>
                            <button class="add">+</button>

                        </div>
                        <div class="common-price">
                            <p>{{ $item->model->price}}
                                <span>сум</span>
                            </p>
                        </div>
                    </div>
                    <div class="remove col-xl-2 col-lg-1 col-sm-1 col-2">
                        <a href="#!">
                            <img src="/assets/img/elements/menu-close.svg" alt="">
                        </a>
                    </div>
                </li>
                @endforeach

            </ul>
            <div class="credit-pay">
                <div class="order col-xl-4">
                    <input id="installmentorder" type="checkbox">
                    <label for="installmentorder">Купить в рассрочку</label>
                </div>
                <div class="price col-xl-4">
                    <p id="totalPrice">Общая сумма заказа:
                        <span id="">5 402 961 сум</span>
                    </p>
                </div>
            </div>
            <div class="order-form container">
                <h2>укажите ваши данные</h2>
                <div class="form">
                    <input required class="name" type="text" placeholder="Ф.И.О">
                    <input required class="tel" type="number" placeholder="Номер телефона">
                    <input class="email" type="email" placeholder="E-mail">
                    <select required class="paytype" name="payment-method">
                        <option value disabled selected>Способ оплаты</option>
                        <option value="cash">Наличными или через терминал курьеру</option>
                        <option value="payme">PayMe</option>
                        <option value="click">Click</option>
                    </select>
                    <input required class="adress" type="text" placeholder="Адрес доставки">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Комментарий к заказу..."></textarea>
                    <div class="complete-order">
                        <div class="privacy-agreement">
                            <input id="privacy" type="checkbox" required>
                            <label for="privacy">Прочитал и согласен с
                                <a href="privacy_policy.html" class="privacy-policy">политикой
                                    конфиденциальности</a>
                            </label>
                        </div>
                        <button type="submit">
                            <p>Оформить покупку</p>
                        </button>
                    </div>
                    <p class="warning-text col-xl-6 col-lg-6 col-md-8 col-sm-10 col-12">* Нажимая на кнопку
                        «оформить
                        заказ», Вы подтверждаете, что согласны с условиями поставки, а так
                        же даете своё согласие на сбор и обработку персональных данных.</p>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection