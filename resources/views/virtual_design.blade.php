@extends('layout')


@section('content')
<form action="assets/form/kiranosend.php" method="POST" id="form">
    <div class="virtual_design container">
        <div class="owl-carousel">
            <div><img src="assets/img/virtual_design/slide_01.jpg" alt=""></div>
            <div><img src="assets/img/virtual_design/slide_02.jpg" alt=""></div>
            <div><img src="assets/img/virtual_design/slide_03.jpg" alt=""></div>
            <div><img src="assets/img/virtual_design/slide_04.jpg" alt=""></div>
            <div class="form_inputs">
                <img src="assets/img/virtual_design/for_slide_04.png" alt="">
                <h2 class="title">ОСТАВЬТЕ СВОЙ НОМЕР ТЕЛЕФОНА</h2>
                <h2><span>И Я СВЯЖУСЬ С ВАМИ В ТЕЧЕНИЕ 2Х ЧАСОВ</span></h2>
                <input type="text" placeholder="Имя" name="user_name" required>
                <input type="number" name="user_phone" placeholder="Номер телефона" required>
                <select name="user_connection">
                    <option value="" disabled selected>Как с вами связаться</option>
                    <option value="Позвонить">Позвонить</option>
                    <option value="Telegram">Telegram</option>
                    <option value="Whatsapp">Whatsapp</option>
                    <option value="SMS">SMS</option>
                </select>
            </div>
            <div class="leavecomment">
                <img src="assets/img/virtual_design/for_slide_04.png" alt="">
                <div class="content">
                    <h2 class="title">Оставьте свой номер телефона</h2>
                    <h2><span>И я свяжусь с вами в течение 2х часов</span></h2>
                    <span>Если есть пожелания, расскажите о них здесь:</span>
                    <div class="commentholder">
                        <textarea name="user_text"></textarea>
                        <input type="submit" value="Далее">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection