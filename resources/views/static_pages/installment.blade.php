@extends('layout')


@section('content')
    <section class="installment-main container">
        <div class="installment-info">
            <span></span>
            <div class="installment-info-img p-0 col-xl-5 col-lg-4 col-md-4 col-sm-4">
                <img src="/assets/img/installment/main_pic2.jpg" alt="">
            </div>
            <div class="installment-info-desc col-xl-7 col-lg-8 col-md-8 col-sm-8 col-12">
                <h1 class="installment-title"> КРЕДИТ</h1>
                <p class="installment-desc">В наших салонах Вы можете приобрести мебель в кредит на срок до 24 месяцев и на сумму до 20 000 000 сум.</p>
                <div class="installment-requirements">
                    <p>Для получения кредита необходимы:</p>
                    <p class="requirements-detail">1. Паспорт / ИНН</p>
                    <p class="requirements-detail">2. Сумма годового дохода</p>
                    <p>Cроки оформления:</p>
                    <p class="requirements-detail">От 1 до 3 дней</p>
                    <p>Cроки кредита:</p>
                    <p class="requirements-detail">от 12 до 24 месяцев</p>
                    <p>Условия:</p>
                    <p class="requirements-detail">25% предоплаты, далее по 15% в течении оставшихся 5 месяцев</p>
                </div>
            </div>
        </div>

        <div class="installment-info mt-5 mb-5">
            <span></span>
            <div class="installment-info-desc col-xl-7 col-lg-8 col-md-8 col-sm-8 col-12">
                <h1 class="installment-title">РАССРОЧКА</h1>
                <p class="installment-desc">В наших салонах Вы можете приобрести мебель в рассрочку на срок до 24 месяцев и на сумму до 20 000 000 сум.</p>
                <div class="installment-requirements">
                    <p>Для оформления рассрочки необходимы:</p>
                    <p class="requirements-detail">1. Паспорт / ИНН</p>
                    <p class="requirements-detail">2. Сумма годового дохода</p>
                    <p>Cроки оформления:</p>
                    <p class="requirements-detail">От 1 до 3 дней</p>
                    <p>Cроки рассрочки:</p>
                    <p class="requirements-detail">до 6 месяцев</p>
                    <p>Условия:</p>
                    <p class="requirements-detail">25% предоплаты, далее по 15% в течении оставшихся 5 месяцев</p>
                </div>
            </div>
            <div class="installment-info-img p-0 col-xl-5 col-lg-4 col-md-4 col-sm-4">
                <img src="/assets/img/installment/main_pic.jpg" alt="">
            </div>
        </div>
        <div class="manager-contact">
            <a>
                <p>СВЯЖИТЕСЬ С МЕНЕДЖЕРОМ ДЛЯ УТОЧНЕНИЯ ДЕТАЛЕЙ</p>
                <img src="/assets/img/installment/arrow.svg" alt="">
            </a>
        </div>
    </section>
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
@endsection

