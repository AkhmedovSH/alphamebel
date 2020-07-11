<template>
<main>
    <div class="crumbs container">
        <ul>
            <a href="/index.html">
                <li>Главная / </li>
            </a>
            <a>
                <li>Шкафы</li>
            </a>
        </ul>
    </div>
    <div class="single-goods container">
        <form class="filter col-xl-3 col-lg-3">
            <div id="filterOpen" class="title">
                <h3>Подбор по параметрам:</h3>
                <img src="/assets/img/elements/filter-icon.svg" alt="">
            </div>
            <div id="filterContent" class="content">
                <div class="styles">
                    <h4 class="filteropentitle style-title-closed">Cтиль</h4>
                    <ul class="list style-list">
                        <li>
                            <input class="filter-items" id="classic" type="checkbox" />
                            <label for="classic">Классика</label>
                        </li>
                        <li>
                            <input class="filter-items" id="neoclassic" type="checkbox" />
                            <label for="neoclassic">Неоклассика</label>
                        </li>
                        <li>
                            <input class="filter-items" id="modern" type="checkbox" />
                            <label for="modern">Современный</label>
                        </li>
                    </ul>
                </div>
                <div class="colors">
                    <h4 class="filteropentitle colors-title-closed">Цвет</h4>
                    <ul class="list colors-list">
                        <li>
                            <input class="filter-items" id="light" type="checkbox" />
                            <label for="light">Светлый</label>
                        </li>
                        <li>
                            <input class="filter-items" id="dark" type="checkbox" />
                            <label for="dark">Темный</label>
                        </li>
                    </ul>
                </div>
                <div class="direction">
                    <h4 class="filteropentitle direction-title-closed">Направление</h4>
                    <ul class="list direction-list">
                        <li>
                            <input class="filter-items" id="bedroom" type="checkbox" />
                            <label for="bedroom">Спальни</label>
                        </li>
                        <li>
                            <input class="filter-items" id="livingroom" type="checkbox" />
                            <label for="livingroom">Гостиные</label>
                        </li>
                        <li>
                            <input class="filter-items" id="halls" type="checkbox" />
                            <label for="halls">Прихожие</label>
                        </li>
                        <li>
                            <input class="filter-items" id="nursery" type="checkbox" />
                            <label for="nursery">Молодежные</label>
                        </li>
                        <li>
                            <input class="filter-items" id="hotels" type="checkbox" />
                            <label for="hotels">Гостиничная мебель</label>
                        </li>
                        <li>
                            <input class="filter-items" id="cabinets" type="checkbox" />
                            <label for="cabinets">Кабинеты</label>
                        </li>
                        <li>
                            <input class="filter-items" id="office" type="checkbox" />
                            <label for="office">Офисная мебель</label>
                        </li>
                        <li>
                            <input class="filter-items" id="interior" type="checkbox" />
                            <label for="interior">Предметы интерьера</label>
                        </li>
                    </ul>
                </div>
                <div class="shelves">
                    <h4 class="filteropentitle shelves-title-closed">Тип полок</h4>
                    <ul class="list shelves-list">
                        <li>
                            <input class="filter-items" id="shelvglass" type="checkbox" />
                            <label for="shelvglass">Стеклянные</label>
                        </li>
                        <li>
                            <input class="filter-items" id="shelvshield" type="checkbox" />
                            <label for="shelvshield">Щитовые</label>
                        </li>
                    </ul>
                </div>
                <div class="front">
                    <h4 class="filteropentitle front-title-closed">Тип фасада</h4>
                    <ul class="list front-list">
                        <li>
                            <input class="filter-items" id="frontsimple" type="checkbox" />
                            <label for="frontsimple">Глухие</label>
                        </li>
                        <li>
                            <input class="filter-items" id="frontmirror" type="checkbox" />
                            <label for="frontmirror">С зеркалом</label>
                        </li>
                        <li>
                            <input class="filter-items" id="frontglass" type="checkbox" />
                            <label for="frontglass">Со стеклом</label>
                        </li>
                    </ul>
                </div>
                <div class="height">
                    <h4 class="filteropentitle height-title-closed">Высота</h4>
                    <ul class="list height-list">
                        <li>
                            <input class="filter-items" id="heightone" type="checkbox" />
                            <label for="heightone">от 1790мм до 2000мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="heighttwo" type="checkbox" />
                            <label for="heighttwo">от 2000мм до 2400мм</label>
                        </li>
                    </ul>
                </div>
                <div class="deepth">
                    <h4 class="filteropentitle deepth-title-closed">Глубина</h4>
                    <ul class="list deepth-list">
                        <li>
                            <input class="filter-items" id="deeoone" type="checkbox" />
                            <label for="deeoone">от 290мм до 500мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="deeptwo" type="checkbox" />
                            <label for="deeptwo">от 500мм до 700мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="deepthree" type="checkbox" />
                            <label for="deepthree">от 700мм+</label>
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/wardrobes/wardrobes.jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
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
                                <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции Флоренция, Bogema,
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
                <button id="loadMore">
                    ПОКАЗАТЬ ЕЩЕ ТОВАРЫ
                </button>
            </div>
        </div>
    </div>
    <div id="addedToBasket">
        <p>Товар добавлен в корзину</p>
        <div id="addedItemClose">
            <img src="/assets/img/elements/menu-close-white.svg" alt="">
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
