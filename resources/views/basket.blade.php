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
                            <span>Код: {{$item->model->code}}</span>
                        </div>
                    </div>
                    <div class="price col-xl-6 col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="priceinner">
                            <p>{{ number_format($item->model->sale != 0 ? $item->model->price - (($item->model->price / 100) * $item->model->sale) : $item->model->price, 2) }}
                                <span>сум</span>
                            </p>
                            <p class="old-orice">{{ number_format($item->model->price, 2) }} сум</p>
                        </div>
                        <div class="quantity">
                            <button class="remove">-</button>
                            <input type="number" value="{{ $item->qty }}" id="" min="1" max="15" required>
                            <button class="add">+</button>

                        </div>
                        <div class="common-price">
                            <p>{{ number_format(($item->model->sale != 0 ? $item->model->price - (($item->model->price / 100) * $item->model->sale) : $item->model->price) * $item->qty, 2) }}
                                <span>сум</span>
                            </p>
                        </div>
                    </div>
                    <div class="remove col-xl-2 col-lg-1 col-sm-1 col-2">
                        <a href="#!">
                            <img src="/assets/img/elements/menu-close.svg">
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
                        <span>{{ Cart::subtotal() }} сум</span>
                    </p>
                </div>
            </div>
            <div class="order-form container">
                <h2>укажите ваши данные</h2>
                <div class="form">
                <form action="https://checkout.paycom.uz/" method="POST"></form>
                    @csrf
                    <input type="hidden" name="merchant" value="5c860c0dd5d7060e1b219632" autocomplete="off">
                    <input type="hidden" name="amount" autocomplete="off" value="{{ Cart::subtotal() }}">
                    <input type="hidden" name="callback" value="http://shatura.uz/profile/payment" autocomplete="off">

                    <input required class="name" type="text" placeholder="Ф.И.О">
                    <input required class="tel" type="number" placeholder="Номер телефона">
                    <input class="email" type="email" placeholder="E-mail">
                    <select required class="paytype" name="payment-method">
                        <option value disabled selected>Способ оплаты</option>
                        <option value="cash">Наличными или через терминал курьеру</option>
                        <option value="payme">PayMe</option>
                        <option value="click">Click</option>
                    </select>
                    <input name="address" required class="adress" type="text" placeholder="Адрес доставки">
                    <textarea name="comment" name="" id="" cols="30" rows="10" placeholder="Комментарий к заказу..."></textarea>
                    <div class="complete-order">
                        <div class="privacy-agreement">
                            <input id="privacy" type="checkbox" required>
                            <label for="privacy">Прочитал и согласен с
                                <a href="/public_offer" class="privacy-policy">политикой
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
                </form>
                </div>
                {{-- <form action="https://my.click.uz/services/pay" id="click_form" class="form" method="get">
                    <input type="hidden" name="amount" value="10000">
                    <input type="hidden" name="merchant_id" value="9111">
                    <input type="hidden" name="merchant_user_id" value="12396">
                    <input type="hidden" name="service_id" value="13457">
                    <input type="hidden" name="transaction_param" value="1">
                    <input type="hidden" name="return_url" value="https://answers.uz/profile/payment">
                    <button type="submit" class="btn btn-success">Click orqali to'lash</button>
                </form> --}}
            </div>
        </form>
    </div>
</main>
@endsection