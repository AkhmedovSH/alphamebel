<template>
<main>
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
                <li>Кровати</li>
            </a>
        </ul>
    </div>
    <div class="single-goods container">
        <form class="filter col-xl-3 col-lg-3">
            <div class="filterOpen title">
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
                <div class="view">
                    <h4 class="filteropentitle view-title-closed">Вид</h4>
                    <ul class="list view-list">
                        <li>
                            <input class="filter-items" id="framebed" type="checkbox" />
                            <label for="framebed">Каркасные кровати</label>
                        </li>
                        <li>
                            <input class="filter-items" id="softbed" type="checkbox" />
                            <label for="softbed">Мягкие кровати</label>
                        </li>
                    </ul>
                </div>
                <div class="type">
                    <h4 class="filteropentitle type-title-closed">Тип</h4>
                    <ul class="list type-list">
                        <li>
                            <input class="filter-items" id="halfplace" type="checkbox" />
                            <label for="halfplace">1,5 - спальные</label>
                        </li>
                        <li>
                            <input class="filter-items" id="oneplace" type="checkbox" />
                            <label for="oneplace">1 - спальные</label>
                        </li>
                        <li>
                            <input class="filter-items" id="twoplace" type="checkbox" />
                            <label for="twoplace">2 - спальные</label>
                        </li>
                        <li>
                            <input class="filter-items" id="twotier" type="checkbox" />
                            <label for="twotier">2 - ярусные</label>
                        </li>
                        <li>
                            <input class="filter-items" id="sofatype" type="checkbox" />
                            <label for="sofatype">Кровать-диван</label>
                        </li>
                        <li>
                            <input class="filter-items" id="optiontype" type="checkbox" />
                            <label for="optiontype">Опции к кроватям</label>
                        </li>
                    </ul>
                </div>
                <div class="lifter">
                    <h4 class="filteropentitle lifter-title-closed">Подъемный механизм</h4>
                    <ul class="list lifter-list">
                        <li>
                            <input class="filter-items" id="consists" type="checkbox" />
                            <label for="consists">Есть</label>
                        </li>
                        <li>
                            <input class="filter-items" id="notconsists" type="checkbox" />
                            <label for="notconsists">Нет</label>
                        </li>
                    </ul>
                </div>
                <div class="softhead">
                    <h4 class="filteropentitle softhead-title-closed">Мягкое изголовье</h4>
                    <ul class="list softhead-list">
                        <li>
                            <input class="filter-items" id="softheadconsists" type="checkbox" />
                            <label for="softheadconsists">Есть</label>
                        </li>
                        <li>
                            <input class="filter-items" id="softheadnotconsists" type="checkbox" />
                            <label for="softheadnotconsists">Нет</label>
                        </li>
                    </ul>
                </div>
                <div class="bedsize">
                    <h4 class="filteropentitle bedsize-title-closed">Размер сп.места</h4>
                    <ul class="list bedsize-list">
                        <li>
                            <input class="filter-items" id="sizeone" type="checkbox" />
                            <label for="sizeone">800x2000мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="sizetwo" type="checkbox" />
                            <label for="sizetwo">900x2000мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="sizethree" type="checkbox" />
                            <label for="sizethree">1200x2000мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="sizefour" type="checkbox" />
                            <label for="sizefour">1400x2000мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="sizefive" type="checkbox" />
                            <label for="sizefive">1600x2000мм</label>
                        </li>
                        <li>
                            <input class="filter-items" id="sizesix" type="checkbox" />
                            <label for="sizesix">1800x2000мм</label>
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
                            <a href="bed1.html" class="goodsimg-main card_main">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/beds/item (2).jpg" alt="" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" alt="" class="img_item2">
                            </div>
                            <div class="stock">
                                <span>-10%</span>
                                <p>Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="bed1.html">
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
