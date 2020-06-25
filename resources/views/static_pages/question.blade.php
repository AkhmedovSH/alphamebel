@extends('layout')


@section('content')
<div class="question container">
    <h1>Задать вопрос</h1>
    <p>Наши специалисты проконсультируют Вас, примут замечания и пожелания. В рабочие дни и часы сотрудник компании
        ответит на Ваш запрос.</p>
    <span>Все поля обязательны для заполнения</span>

    <form action="">
        <input type="text" placeholder="Ваше Имя" required>
        <input type="number" placeholder="Номер телефона" required>
        <textarea placeholder="Ваш вопрос..." required></textarea>
        <input type="submit" name="" id="questionsend" value="Отправить">
    </form>

    <div id="questionsent">
        <p>ваше сообщение успешно отправлено
            наш менеджер свяжется с вами</p>
        <div id="addedItemClose">
            <img src="/assets/img/elements/menu-close-white.svg" alt="">
        </div>
    </div>

</div>
@endsection