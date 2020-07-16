<template>
<div class="order-form container">
    <h2>укажите ваши данные</h2>
    <div class="form">
    <form id="form1" action="https://my.click.uz/services/pay" method="GET">
        <input type="hidden" name="amount" value="">
        <input type="hidden" name="merchant_id" value="11309">
        <input type="hidden" name="merchant_user_id" value="16169">
        <input type="hidden" name="service_id" value="15788">
        <input type="hidden" name="transaction_param" value="1">
        <input type="hidden" name="return_url" value="http://shatura.uz/">

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
        <textarea name="comment" cols="30" rows="10" placeholder="Комментарий к заказу..."></textarea>
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
    
</div><!-- {{ Cart::subtotal(0, 0, '') }} -->
</template>

<script>
export default {
    props: ['products'],
        data() {
        return {
            data: [],
        };
    },
    methods: {
        selectAttribute(attribute) {
            if(attribute.checked == 0) {
                this.attributeIds.push(attribute.id)
            }else{
                const key = this.attributeIds.indexOf(attribute.id);
                this.attributeIds.splice(key, 1)
            }
        },
    mounted() {
        this.data = this.products
    }
    }
}
</script>
