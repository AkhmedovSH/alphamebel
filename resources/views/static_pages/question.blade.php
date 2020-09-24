@extends('layout')





@section('content')

<div class="question container">

    <h1>Задать вопрос</h1>

    <p>Наши специалисты проконсультируют Вас, примут замечания и пожелания. В рабочие дни и часы сотрудник компании

        ответит на Ваш запрос.</p>

    <span>Все поля обязательны для заполнения</span>



    <form action="/sendRequest" method="POST">

        <input type="hidden" name="_token" value="XXNDbb0SwIjFQL2FATN4J5UiYKjQGeYNjzzY6fFc">

        <input type="text" name="name" placeholder="Ваше Имя" required>

        <input type="number" name="phone" placeholder="Номер телефона" required>

        <textarea name="comment" placeholder="Ваш вопрос..." required></textarea>

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