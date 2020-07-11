<template>
<main>
 <div class="single-goods container">
    <form class="filter marginhas col-xl-3 col-lg-3">
        <div class="filterOpen title">
            <h3>Подбор по параметрам:</h3>
            <img src="/assets/img/elements/filter-icon.svg" alt="">
        </div>
        <div id="filterContent" class="content">

            <div class="type">
                <h4 class="filteropentitle type-title-closed">Типы:</h4>
                <ul class="list type-list">
                    <li>
                        <input class="filter-items" id="chairs" type="checkbox" />
                        <label for="chairs">Стулья</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-armchair" type="checkbox" />
                        <label for="chairs-armchair">Кресла</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-hardsit" type="checkbox" />
                        <label for="chairs-hardsit">С жестким сиденьем </label>
                    </li>
                </ul>
            </div>
            <div class="styles">
                <h4 class="filteropentitle style-title-closed">Cтиль</h4>
                <ul class="list style-list">
                    <li>
                        <input class="filter-items" id="chairs-classic" type="checkbox" />
                        <label for="chairs-classic">Классика</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-neoclassic" type="checkbox" />
                        <label for="chairs-neoclassic">Неоклассика</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-modern" type="checkbox" />
                        <label for="chairs-modern">Современный</label>
                    </li>
                </ul>
            </div>
            <div class="colors">
                <h4 class="filteropentitle colors-title-closed">Цвет обивки</h4>
                <ul class="list colors-list">
                    <li>
                        <input class="filter-items" id="chairs-beige" type="checkbox" />
                        <label for="chairs-beige">Бежевый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-white" type="checkbox" />
                        <label for="chairs-white">Белый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-blue" type="checkbox" />
                        <label for="chairs-blue">Голубой</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-yellow" type="checkbox" />
                        <label for="chairs-yellow">Желтый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-green" type="checkbox" />
                        <label for="chairs-green">Зеленый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-brown" type="checkbox" />
                        <label for="chairs-brown">Коричневый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-red" type="checkbox" />
                        <label for="chairs-red">Красный</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-orange" type="checkbox" />
                        <label for="chairs-orange">Оранжевый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-pattern" type="checkbox" />
                        <label for="chairs-pattern">Рисунок</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-grey" type="checkbox" />
                        <label for="chairs-grey">Серый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-lightblue" type="checkbox" />
                        <label for="chairs-lightblue">Синий</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-violet" type="checkbox" />
                        <label for="chairs-violet">Фиолетовый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-black" type="checkbox" />
                        <label for="chairs-black">Черный</label>
                    </li>
                </ul>
            </div>
            <div class="cloth">
                <h4 class="filteropentitle cloth-title-closed">Тип ткани</h4>
                <ul class="list cloth-list">
                    <li>
                        <input class="filter-items" id="chairs-velur" type="checkbox" />
                        <label for="chairs-velur">Велюр</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-jacard" type="checkbox" />
                        <label for="chairs-jacard">Жаккард</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-rogoje" type="checkbox" />
                        <label for="chairs-rogoje">Рогожка</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-folk" type="checkbox" />
                        <label for="chairs-folk">Фолк</label>
                    </li>
                    <li>
                        <input class="filter-items" id="chairs-ecoskin" type="checkbox" />
                        <label for="chairs-ecoskin">Экокожа</label>
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
    <div id="goodswrapper" class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="cards contents">
            <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="goodscard content">
                    <div class="img">
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
                        <a href="../beds/bed1.html" class="goodsimg-main card_main">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/chairs.jpg" alt=""
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
                        <a href="../beds/bed1.html">
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
