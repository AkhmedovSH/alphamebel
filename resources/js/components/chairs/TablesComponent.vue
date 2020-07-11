<template>
<main>
 <div class="single-goods container">
    <form class="filter marginhas col-xl-3 col-lg-3">
        <div class="filterOpen title">
            <h3>Подбор по параметрам:</h3>
            <img src="/assets/img/elements/filter-icon.svg" alt="">
        </div>
        <div id="filterContent" class="content">
            <div class="shape">
                <h4 class="filteropentitle shape-title-closed">Форма:</h4>
                <ul class="list shape-list">
                    <li>
                        <input class="filter-items" id="tables-round" type="checkbox" />
                        <label for="tables-round">Круглые</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-oval" type="checkbox" />
                        <label for="tables-oval">Овальные</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-square" type="checkbox" />
                        <label for="tables-square">Прямоугольные</label>
                    </li>
                </ul>
            </div>
            <div class="styles">
                <h4 class="filteropentitle style-title-closed">Cтиль</h4>
                <ul class="list style-list">
                    <li>
                        <input class="filter-items" id="tables-classic" type="checkbox" />
                        <label for="tables-classic">Классика</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-neoclassic" type="checkbox" />
                        <label for="tables-neoclassic">Неоклассика</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-modern" type="checkbox" />
                        <label for="tables-modern">Современный</label>
                    </li>
                </ul>
            </div>
            <div class="colors">
                <h4 class="filteropentitle colors-title-closed">Цвет</h4>
                <ul class="list colors-list">
                    <li>
                        <input class="filter-items" id="tables-light" type="checkbox" />
                        <label for="tables-light">Светлый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-dark" type="checkbox" />
                        <label for="tables-dark">Темный</label>
                    </li>
                </ul>
            </div>
            <div class="direction">
                <h4 class="filteropentitle direction-title-closed">Направление</h4>
                <ul class="list direction-list">
                    <li>
                        <input class="filter-items" id="tables-bedroom" type="checkbox" />
                        <label for="tables-bedroom">Спальни</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-livingroom" type="checkbox" />
                        <label for="tables-livingroom">Гостиные</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-halls" type="checkbox" />
                        <label for="tables-halls">Прихожие</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-nursery" type="checkbox" />
                        <label for="tables-nursery">Молодежные</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-hotels" type="checkbox" />
                        <label for="tables-hotels">Гостиничная мебель</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-cabinets" type="checkbox" />
                        <label for="tables-cabinets">Кабинеты</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-office" type="checkbox" />
                        <label for="tables-office">Офисная мебель</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-interior" type="checkbox" />
                        <label for="tables-interior">Предметы интерьера</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-chairs" type="checkbox" />
                        <label for="tables-chairs">Столы и стулья</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tables-other" type="checkbox" />
                        <label for="tables-other">Сторонняя продукция - 1</label>
                    </li>
                </ul>
            </div>
            <div class="shelves">
                <h4 class="filteropentitle shelves-title-closed">Тип полок</h4>
                <ul class="list shelves-list">
                    <li>
                        <input class="filter-items" id="tables-shelvshield" type="checkbox" />
                        <label for="tables-shelvshield">Щитовые</label>
                    </li>
                </ul>
            </div>
            <div class="front">
                <h4 class="filteropentitle front-title-closed">Тип фасада</h4>
                <ul class="list front-list">
                    <li>
                        <input class="filter-items" id="tables-frontsimple" type="checkbox" />
                        <label for="tables-frontsimple">Глухие</label>
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
                            <img src="/assets/img/goods/chairs/tables.jpg" alt="" class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/chairs/tables.jpg" alt=""
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
