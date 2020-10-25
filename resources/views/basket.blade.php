@extends('layout')

@section('content')
<main>
    <div class="basket container">
            <h1 class="col-auto">корзина</h1>
            {{-- <p class="client-code col-auto">код клиента: 484700</p> --}}
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
                            @if ($item->model->code != null)
                            <span>Код: {{$item->model->code}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="price col-xl-6 col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="priceinner">
                            <span>
                                {{ number_format($item->model->sale != 0 ? $item->model->price - (($item->model->price / 100) * $item->model->sale) : $item->model->price, 0,","," ") }}
                                <span>сум</span>
                            </span>
                            @if ($item->model->sale != 0)
                                <p class="old-orice">{{ number_format($item->model->price, 0,","," ") }} сум</p>
                            @endif
                        </div>
                        <select  class="select--ys show-qty quantity" data-id="{{$item->rowId}}">
                            <option {{ $item->qty == 1 ? 'selected' : ''}}>1</option>
                            <option {{ $item->qty == 2 ? 'selected' : ''}}>2</option>
                            <option {{ $item->qty == 3 ? 'selected' : ''}}>3</option>
                            <option {{ $item->qty == 4 ? 'selected' : ''}}>4</option>
                            <option {{ $item->qty == 5 ? 'selected' : ''}}>5</option>
                            <option {{ $item->qty == 10 ? 'selected' : ''}}>10</option>
                        </select>
                        <div class="common-price">
                            <p>{{ number_format(($item->model->sale != 0 ? $item->model->price - (($item->model->price / 100) * $item->model->sale) : $item->model->price) * $item->qty, 0,","," ") }}
                                <span>сум</span>
                            </p>
                        </div>
                    </div>
                    <div class="remove col-xl-2 col-lg-1 col-sm-1 col-2">
                        <form action="{{route('cart.destroy',$item->rowId)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" style="background: none;
                            color: inherit;
                            border: none;
                            padding: 0;
                            font: inherit;
                            cursor: pointer;
                            outline: inherit;">
                                <img src="/assets/img/elements/menu-close.svg">
                            </button>
                        </form>
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
                        <span>{{ Cart::subtotal(0, 0, ' ') }} сум</span>
                    </p>
                </div>
            </div>
            <div class="order-form container">
                <h2>укажите ваши данные</h2>
                <div class="form">
                <form id="form1" action="/makePayment" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="{{ Cart::subtotal(0, 0, '') }}">
                    <input type="hidden" name="merchant_id" value="11309">
                    <input type="hidden" name="merchant_user_id" value="16169">
                    <input type="hidden" name="service_id" value="15788">
                    <input type="hidden" name="return_url" value="http://shatura.uz/">

                    <input required class="name" type="text" name="name" placeholder="Ф.И.О">
                    <input required class="tel" name="phone" type="number" placeholder="Номер телефона">
                    <input class="email" type="email" name="email" placeholder="E-mail">
                    <select required class="paytype" name="payment_type">
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
                                <a href="/offerContract" class="privacy-policy">политикой
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
                
            </div>
    </div>
</main>
@endsection
