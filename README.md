<form action="/cart" method="post">
    <input type="hidden" name="_token" :value="csrf">
    <input type="hidden" name="id" :value="product.id">
    <input type="hidden" name="title" :value="product.title">
    <input type="hidden" name="part_number" :value="product.part_number">
    <input type="hidden" name="price" :value="product.price">
    <input type="hidden" name="sale" :value="product.sale">
    <button type="submit" class="add-to-cart_button">Добавить в корзину</button>
</form>


Cart::count()
Cart::subtotal();



mattress_width