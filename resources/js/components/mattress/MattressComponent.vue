<template>
<main>
<div class="single-goods container">
    <form class="filter marginhas col-xl-3 col-lg-3">
        <div class="filterOpen title">
            <h3>Подбор по параметрам:</h3>
            <img src="/assets/img/elements/filter-icon.svg" alt="">
        </div>

        <div id="filterContent" class="content">
            <div class="collection">
                <h4 class="filteropentitle collection-title-closed">Коллекция</h4>
                <ul class="list collection-list">
                    <li>
                        <input class="filter-items" id="bedding" type="checkbox" />
                        <label for="bedding">BEDDING</label>
                    </li>
                    <li>
                        <input class="filter-items" id="bioform" type="checkbox" />
                        <label for="bioform">BIOFORM</label>
                    </li>
                    <li>
                        <input class="filter-items" id="dream" type="checkbox" />
                        <label for="dream">DREAM</label>
                    </li>
                    <li>
                        <input class="filter-items" id="flash" type="checkbox" />
                        <label for="flash">FLASH</label>
                    </li>
                    <li>
                        <input class="filter-items" id="immuno" type="checkbox" />
                        <label for="immuno">IMMUNO</label>
                    </li>
                    <li>
                        <input class="filter-items" id="spring" type="checkbox" />
                        <label for="spring">SPRING</label>
                    </li>
                    <li>
                        <input class="filter-items" id="medicine" type="checkbox" />
                        <label for="medicine">MEDICINE</label>
                    </li>
                    <li>
                        <input class="filter-items" id="mini" type="checkbox" />
                        <label for="mini">MINI</label>
                    </li>
                    <li>
                        <input class="filter-items" id="roll" type="checkbox" />
                        <label for="roll">ROLL</label>
                    </li>
                    <li>
                        <input class="filter-items" id="shatura" type="checkbox" />
                        <label for="shatura">SHATURA</label>
                    </li>
                    <li>
                        <input class="filter-items" id="silverdoctor" type="checkbox" />
                        <label for="silverdoctor">SILVER DOCTOR</label>
                    </li>
                </ul>
            </div>
            <div class="type">
                <h4 class="filteropentitle type-title-closed">Тип матраса</h4>
                <ul class="list type-list">
                    <li>
                        <input class="filter-items" id="mattress-nospring" type="checkbox" />
                        <label for="mattress-nospring">Беспружинный</label>
                    </li>
                    <li>
                        <input class="filter-items" id="mattress-child" type="checkbox" />
                        <label for="mattress-child">Детский</label>
                    </li>
                    <li>
                        <input class="filter-items" id="mattress-spring" type="checkbox" />
                        <label for="mattress-spring">Пружинный</label>
                    </li>
                </ul>
            </div>
            <div class="heaviness">
                <h4 class="filteropentitle heaviness-title-closed">Нагрузка на сп.место</h4>
                <ul class="list heaviness-list">
                    <li>
                        <input class="filter-items" id="heaviness-50" type="checkbox" />
                        <label for="heaviness-50">50кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-90" type="checkbox" />
                        <label for="heaviness-90">90кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-100" type="checkbox" />
                        <label for="heaviness-100">100кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-110" type="checkbox" />
                        <label for="heaviness-110">110кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-120" type="checkbox" />
                        <label for="heaviness-120">120кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-130" type="checkbox" />
                        <label for="heaviness-130">130кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-140" type="checkbox" />
                        <label for="heaviness-140">140кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-150" type="checkbox" />
                        <label for="heaviness-150">150кг</label>
                    </li>
                    <li>
                        <input class="filter-items" id="heaviness-200" type="checkbox" />
                        <label for="heaviness-200">200кг</label>
                    </li>
                </ul>
            </div>
            <div class="hardness">
                <h4 class="filteropentitle hardness-title-closed">Жесткость</h4>
                <ul class="list hardness-list">
                    <li>
                        <input class="filter-items" id="hardness-bothside" type="checkbox" />
                        <label for="hardness-bothside">Двусторонний</label>
                    </li>
                    <li>
                        <input class="filter-items" id="hardness-hard" type="checkbox" />
                        <label for="hardness-hard">Жесткий</label>
                    </li>
                    <li>
                        <input class="filter-items" id="hardness-soft" type="checkbox" />
                        <label for="hardness-soft">Мягкий</label>
                    </li>
                    <li>
                        <input class="filter-items" id="hardness-middle" type="checkbox" />
                        <label for="hardness-middle">Средний</label>
                    </li>
                </ul>
            </div>
            <div class="containing">
                <h4 class="filteropentitle containing-title-closed">Наполнение</h4>
                <ul class="list containing-list">
                    <li>
                        <input class="filter-items" id="bicoco" type="checkbox" />
                        <label for="bicoco">Би - кокос</label>
                    </li>
                    <li>
                        <input class="filter-items" id="cactus" type="checkbox" />
                        <label for="cactus">Кактус</label>
                    </li>
                    <li>
                        <input class="filter-items" id="cocos" type="checkbox" />
                        <label for="cocos">Кокос</label>
                    </li>
                    <li>
                        <input class="filter-items" id="latex" type="checkbox" />
                        <label for="latex">Латекс</label>
                    </li>
                    <li>
                        <input class="filter-items" id="memory" type="checkbox" />
                        <label for="memory">Мемори</label>
                    </li>
                    <li>
                        <input class="filter-items" id="mattress-penoliuretan" type="checkbox" />
                        <label for="mattress-penoliuretan">Пенолиуретан</label>
                    </li>
                    <li>
                        <input class="filter-items" id="sizal" type="checkbox" />
                        <label for="sizal">Сизаль</label>
                    </li>
                </ul>
            </div>
            <div class="btns">
                <button id="reset" type="reset">
                    Сбросить фильтры
                </button>
                <button id="accept" type="submit">
                    ПРИМЕНИТЬ
                </button>
            </div>
        </div>
    </form>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="cards contents">
            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none;"
                class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none;"
                class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none;"
                class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="mattrass1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/mattrasses/mattress.jpg" alt=""
                                class="img_item1">
                            <img src="/assets/img/goods/beds/item (3).jpg" alt=""
                                class="img_item2">
                        </div>
                        <div class="stock">
                            <span>-10%</span>
                            <p>Распродажа</p>
                        </div>
                    </div>
                    <div class="desc">
                        <a href="mattrass1.html">
                            <p class="title">Кровать 2 сп. 1600 мм. изг. прямоуг</p>
                            <p class="code">Код: 484700</p>
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция,
                                Bogema,
                                Кровать
                                2-спальная, цвет темный из коллекции </p>
                            <div class="size">
                                <p>Ш: 1987</p>
                                <p>Д: 2087</p>
                                <p>В: 6505</p>
                            </div>
                        </a>
                        <div class="order">
                            <div class="price">
                                <p>21 356 000 сум</p>
                                <p>30 345 000 сум</p>
                            </div>
                            <button class="add">КУПИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more">
            <button class="loadMore">
                ПОКАЗАТЬ ЕЩЕ ТОВАРЫ
            </button>
        </div>
    </div>
</div>
</main>
</template>

<script>
export default {
    props:['products', 'filters', 'category', 'attributes', 'credit'],
        data() {
        return {
            initialData: [],
            attributeIds: [],
            data: [],
            filteredProducts: [],
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
        calculate(product) {
            var newPrice = 0
            if(product.sale != 0) {
                var sale = (((product.price / 100) * product.sale) / 100) * this.credit.credit
                var productPrice = (product.price / 100) * product.sale
                newPrice = (productPrice * (sale/productPrice)) / this.credit.month
                
                return newPrice.toFixed(2)
            } else {
                sale = (product.price / 100) * this.credit.credit
                
                newPrice = (product.price * (sale/product.price)) / this.credit.month
                return newPrice.toFixed(2)
            }
        },
        filterByAttributes() {
            if(this.attributeIds.length != 0){
                this.filteredProducts = []
                for (let i = 0; i < this.initialData.length; i++) {
                    for (let j = 0; j < this.initialData[i]['attribute_ids'].length; j++) {
                        for (let k = 0; k < this.attributeIds.length; k++) {
                            if(this.initialData[i]['attribute_ids'][j] == this.attributeIds[k]){
                                this.filteredProducts.push(this.initialData[i])
                            }
                        }
                    }
                }
                this.data = this.getUniqueArray(this.filteredProducts)
            }
            
            
        },
        cancelFilters() {
            for (let i = 0; i < this.data.length; i++) {
                this.data[i]['checked'] = 0
            }
            this.data = this.initialData
        },
        getUniqueArray(arr=[], compareProps=[]) {
            let modifiedArray= [];
            if(compareProps.length === 0 && arr.length > 0)
            compareProps.push(...Object.keys(arr[0]));
                arr.map(item=> {
            if(modifiedArray.length === 0){
            modifiedArray.push(item);
            }else {
            if(!modifiedArray.some(item2=> 
            compareProps.every(eachProps=> item2[eachProps] === item[eachProps])
            )){modifiedArray.push(item);}
            }
            });
            return modifiedArray;
        }
    },
    mounted() {
        if(this.filters != undefined)
            for (let i = 0; i < this.filters.length; i++) {
                this.filters[i]['attributes'] = []
                for (let j = 0; j < this.attributes.length; j++) {
                    if(this.filters[i]['id'] == this.attributes[j]['filter_id']) {
                        this.filters[i]['attributes'].push(this.attributes[j])
                    }
                }
            }
        
        this.data = this.products
        this.initialData = this.products
    }
}
</script>
