<template>
<main>
<div class="single-goods sofas container">
    <form class="filter marginhas col-xl-3 col-lg-3">
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
            <div class="goodtype">
                <h4 class="filteropentitle goodtype-title-closed">Тип:</h4>
                <ul class="list goodtype-list">
                    <li>
                        <input class="filter-items" id="kitchensofa" type="checkbox" />
                        <label for="kitchensofa">Диван кухонный</label>
                    </li>
                    <li>
                        <input class="filter-items" id="modulesofa" type="checkbox" />
                        <label for="modulesofa">Диван модульный</label>
                    </li>
                    <li>
                        <input class="filter-items" id="straightsofa" type="checkbox" />
                        <label for="straightsofa">Диван прямой</label>
                    </li>
                    <li>
                        <input class="filter-items" id="cornersofa" type="checkbox" />
                        <label for="cornersofa">Диван угловой</label>
                    </li>
                </ul>
            </div>
            <div class="colors">
                <h4 class="filteropentitle colors-title-closed">Цвет обивки</h4>
                <ul class="list colors-list">
                    <li>
                        <input class="filter-items" id="beige" type="checkbox" />
                        <label for="beige">Бежевый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="white" type="checkbox" />
                        <label for="white">Белый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="blue" type="checkbox" />
                        <label for="blue">Голубой</label>
                    </li>
                    <li>
                        <input class="filter-items" id="yellow" type="checkbox" />
                        <label for="yellow">Желтый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="green" type="checkbox" />
                        <label for="green">Зеленый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="brown" type="checkbox" />
                        <label for="brown">Коричневый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="red" type="checkbox" />
                        <label for="red">Красный</label>
                    </li>
                    <li>
                        <input class="filter-items" id="orange" type="checkbox" />
                        <label for="orange">Оранжевый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="pattern" type="checkbox" />
                        <label for="pattern">Рисунок</label>
                    </li>
                    <li>
                        <input class="filter-items" id="grey" type="checkbox" />
                        <label for="grey">Серый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="lightblue" type="checkbox" />
                        <label for="lightblue">Синий</label>
                    </li>
                    <li>
                        <input class="filter-items" id="violet" type="checkbox" />
                        <label for="violet">Фиолетовый</label>
                    </li>
                    <li>
                        <input class="filter-items" id="black" type="checkbox" />
                        <label for="black">Черный</label>
                    </li>
                </ul>
            </div>
            <div class="mechanism">
                <h4 class="filteropentitle mechanism-title-closed">Механизм</h4>
                <ul class="list mechanism-list">
                    <li>
                        <input class="filter-items" id="accordion" type="checkbox" />
                        <label for="accordion">Аккордеон</label>
                    </li>
                    <li>
                        <input class="filter-items" id="no-mechanism" type="checkbox" />
                        <label for="no-mechanism">Без механизма</label>
                    </li>
                    <li>
                        <input class="filter-items" id="rollout" type="checkbox" />
                        <label for="rollout">Выкатной</label>
                    </li>
                    <li>
                        <input class="filter-items" id="dolphin" type="checkbox" />
                        <label for="dolphin">Дельфин</label>
                    </li>
                    <li>
                        <input class="filter-items" id="eurobook" type="checkbox" />
                        <label for="eurobook">Еврокнижка</label>
                    </li>
                    <li>
                        <input class="filter-items" id="book" type="checkbox" />
                        <label for="book">Книжка</label>
                    </li>
                    <li>
                        <input class="filter-items" id="pantograph" type="checkbox" />
                        <label for="pantograph">Пантограф</label>
                    </li>
                    <li>
                        <input class="filter-items" id="tik-tak" type="checkbox" />
                        <label for="tik-tak">Тик-так</label>
                    </li>
                </ul>
            </div>
            <div class="corner">
                <h4 class="filteropentitle corner-title-closed">Расположение угла</h4>
                <ul class="list corner-list">
                    <li>
                        <input class="filter-items" id="left" type="checkbox" />
                        <label for="left">Левое</label>
                    </li>
                    <li>
                        <input class="filter-items" id="p-shape" type="checkbox" />
                        <label for="p-shape">П - образное</label>
                    </li>
                    <li>
                        <input class="filter-items" id="right" type="checkbox" />
                        <label for="right">Правое</label>
                    </li>
                    <li>
                        <input class="filter-items" id="universal" type="checkbox" />
                        <label for="universal">Универсальное</label>
                    </li>
                </ul>
            </div>
            <div class="frame">
                <h4 class="filteropentitle frame-title-closed">Каркас</h4>
                <ul class="list frame-list">
                    <li>
                        <input class="filter-items" id="ldsp" type="checkbox" />
                        <label for="ldsp">ЛДСП</label>
                    </li>
                    <li>
                        <input class="filter-items" id="steel" type="checkbox" />
                        <label for="steel">Металл</label>
                    </li>
                    <li>
                        <input class="filter-items" id="wood" type="checkbox" />
                        <label for="wood">Фанера</label>
                    </li>
                </ul>
            </div>
            <div class="box">
                <h4 class="filteropentitle box-title-closed">Бельевой ящик</h4>
                <ul class="list box-list">
                    <li>
                        <input class="filter-items" id="yes" type="checkbox" />
                        <label for="yes">Да</label>
                    </li>
                    <li>
                        <input class="filter-items" id="no" type="checkbox" />
                        <label for="no">Нет</label>
                    </li>
                </ul>
            </div>
            <div class="armrest">
                <h4 class="filteropentitle armrest-title-closed">Подлокотники</h4>
                <ul class="list armrest-list">
                    <li>
                        <input class="filter-items" id="armrestno" type="checkbox" />
                        <label for="armrestno">Нет</label>
                    </li>
                    <li>
                        <input class="filter-items" id="armrestldsp" type="checkbox" />
                        <label for="armrestldsp">ЛДСП</label>
                    </li>
                    <li>
                        <input class="filter-items" id="armrestsoft" type="checkbox" />
                        <label for="armrestsoft">Мягкие</label>
                    </li>
                </ul>
            </div>
            <div class="cloth">
                <h4 class="filteropentitle cloth-title-closed">Тип ткани</h4>
                <ul class="list cloth-list">
                    <li>
                        <input class="filter-items" id="velur" type="checkbox" />
                        <label for="velur">Велюр</label>
                    </li>
                    <li>
                        <input class="filter-items" id="jacard" type="checkbox" />
                        <label for="jacard">Жаккард</label>
                    </li>
                    <li>
                        <input class="filter-items" id="korfu" type="checkbox" />
                        <label for="korfu">Корфу</label>
                    </li>
                    <li>
                        <input class="filter-items" id="microvelt" type="checkbox" />
                        <label for="microvelt">Микровельвет</label>
                    </li>
                    <li>
                        <input class="filter-items" id="rogoje" type="checkbox" />
                        <label for="rogoje">Рогожка</label>
                    </li>
                    <li>
                        <input class="filter-items" id="shenill" type="checkbox" />
                        <label for="shenill">Шенилл</label>
                    </li>
                    <li>
                        <input class="filter-items" id="ecoskin" type="checkbox" />
                        <label for="ecoskin">Экокожа</label>
                    </li>
                </ul>
            </div>
            <div class="containing">
                <h4 class="filteropentitle containing-title-closed">Наполнение</h4>
                <ul class="list containing-list">
                    <li>
                        <input class="filter-items" id="spring" type="checkbox" />
                        <label for="spring">Пружинный блок</label>
                    </li>
                    <li>
                        <input class="filter-items" id="penoliuretan" type="checkbox" />
                        <label for="penoliuretan">Пенолиуретан</label>
                    </li>
                    <li>
                        <input class="filter-items" id="snakespring" type="checkbox" />
                        <label for="snakespring">Пружинная змейка</label>
                    </li>
                    <li>
                        <input class="filter-items" id="bonnel" type="checkbox" />
                        <label for="bonnel">Пружинный блок “Боннель”</label>
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
                                class="main_img">
                        </a>
                        <div class="img_markers">
                            <img src="/assets/img/goods/sofa/sofas.jpg" alt=""
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
                            <p class="gooddesc">Кровать 2-спальная, цвет темный из коллекции
                                Флоренция, Bogema,
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
