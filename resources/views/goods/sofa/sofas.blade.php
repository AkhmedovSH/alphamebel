@extends('layout')



@section('content')
<product-right-component
:products="{{ $products }}" 
:filters="{{ $filters }}" 
:category="{{ $category }}" 
:attributes="{{ $attributes }}"
:credit="{{ $credit }}"
></product-right-component>
{{-- <main>
    <div class="crumbs container">
        <ul>
            <a href="../../index.html">
                <li>Главная / </li>
            </a>
            <a>
                <li>Мягкая мебель</li>
            </a>
        </ul>
    </div>
    <div class="tabs single-fliter">
        <h1 class="sales-single-filter-open">Предметы мебели</h1>
        <ul class="tabs__caption single-filter-list container">
            <li class="active tables col-xl-2">
                диваны
            </li>
            <li class="chairs col-xl-2">
                кресла
            </li>
            <li class="bankets col-xl-2">
                банкетки
            </li>
            <li class="poofs col-xl-2">
                пуфы
            </li>
        </ul>
        <div class="tabs__content active">
            <div class="single-goods sofas container">
                <form class="filter marginhas col-xl-3 col-lg-3">
                    <div class="filterOpen title">
                        <h3>Подбор по параметрам:</h3>
                        <img src="../../assets/img/elements/filter-icon.svg" alt="">
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/sofas.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
        </div>
        <div class="tabs__content">
            <div class="single-goods armchairs container">
                <form class="filter marginhas col-xl-3 col-lg-3">
                    <div class="filterOpen title">
                        <h3>Подбор по параметрам:</h3>
                        <img src="../../assets/img/elements/filter-icon.svg" alt="">
                    </div>

                    <div id="filterContent" class="content">
                        <div class="styles">
                            <h4 class="filteropentitle style-title-closed">Cтиль</h4>
                            <ul class="list style-list">
                                <li>
                                    <input class="filter-items" id="armchair-classic" type="checkbox" />
                                    <label for="armchair-classic">Классика</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-neoclassic" type="checkbox" />
                                    <label for="armchair-neoclassic">Неоклассика</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-modern" type="checkbox" />
                                    <label for="armchair-modern">Современный</label>
                                </li>
                            </ul>
                        </div>
                        <div class="type">
                            <h4 class="filteropentitle type-title-closed">Типы:</h4>
                            <ul class="list type-list">
                                <li>
                                    <input class="filter-items" id="armchair-modulesofa" type="checkbox" />
                                    <label for="armchair-modulesofa">Диван модульный</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-soft" type="checkbox" />
                                    <label for="armchair-soft">Кресло мягкое</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-bag" type="checkbox" />
                                    <label for="armchair-bag">Кресло - мешок</label>
                                </li>
                            </ul>
                        </div>
                        <div class="direction">
                            <h4 class="filteropentitle direction-title-closed">Направление</h4>
                            <ul class="list direction-list">
                                <li>
                                    <input class="filter-items" id="armchair-office" type="checkbox" />
                                    <label for="armchair-office">Мебель для офиса</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-softfurnit" type="checkbox" />
                                    <label for="armchair-softfurnit">Мягкая мебель</label>
                                </li>
                            </ul>
                        </div>
                        <div class="mechanism">
                            <h4 class="filteropentitle mechanism-title-closed">Механизм</h4>
                            <ul class="list mechanism-list">
                                <li>
                                    <input class="filter-items" id="armchair-accordion" type="checkbox" />
                                    <label for="armchair-accordion">Аккордеон</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-no-mechanism" type="checkbox" />
                                    <label for="armchair-no-mechanism">Без трансформации</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-rollout" type="checkbox" />
                                    <label for="armchair-rollout">Выкатной</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-eurobook" type="checkbox" />
                                    <label for="armchair-eurobook">Еврокнижка</label>
                                </li>
                            </ul>
                        </div>
                        <div class="colors">
                            <h4 class="filteropentitle colors-title-closed">Цвет обивки</h4>
                            <ul class="list colors-list">
                                <li>
                                    <input class="filter-items" id="armchair-beige" type="checkbox" />
                                    <label for="armchair-beige">Бежевый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-white" type="checkbox" />
                                    <label for="armchair-white">Белый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-blue" type="checkbox" />
                                    <label for="armchair-blue">Голубой</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-yellow" type="checkbox" />
                                    <label for="armchair-yellow">Желтый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-green" type="checkbox" />
                                    <label for="armchair-green">Зеленый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-brown" type="checkbox" />
                                    <label for="armchair-brown">Коричневый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-red" type="checkbox" />
                                    <label for="armchair-red">Красный</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-orange" type="checkbox" />
                                    <label for="armchair-orange">Оранжевый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-pattern" type="checkbox" />
                                    <label for="armchair-pattern">Рисунок</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-grey" type="checkbox" />
                                    <label for="armchair-grey">Серый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-lightblue" type="checkbox" />
                                    <label for="armchair-lightblue">Синий</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-violet" type="checkbox" />
                                    <label for="armchair-violet">Фиолетовый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-black" type="checkbox" />
                                    <label for="armchair-black">Черный</label>
                                </li>
                            </ul>
                        </div>
                        <div class="cloth">
                            <h4 class="filteropentitle cloth-title-closed">Тип ткани</h4>
                            <ul class="list cloth-list">
                                <li>
                                    <input class="filter-items" id="armchair-velur" type="checkbox" />
                                    <label for="armchair-velur">Велюр</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-jacard" type="checkbox" />
                                    <label for="armchair-jacard">Жаккард</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-korfu" type="checkbox" />
                                    <label for="armchair-korfu">Корфу</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-microvelt" type="checkbox" />
                                    <label for="armchair-microvelt">Микровельвет</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-rogoje" type="checkbox" />
                                    <label for="armchair-rogoje">Рогожка</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-shenill" type="checkbox" />
                                    <label for="armchair-shenill">Шенилл</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-ecoskin" type="checkbox" />
                                    <label for="armchair-ecoskin">Экокожа</label>
                                </li>
                            </ul>
                        </div>
                        <div class="frame">
                            <h4 class="filteropentitle frame-title-closed">Каркас</h4>
                            <ul class="list frame-list">
                                <li>
                                    <input class="filter-items" id="armchair-ldsp" type="checkbox" />
                                    <label for="armchair-ldsp">ЛДСП</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-steel" type="checkbox" />
                                    <label for="armchair-steel">Металл</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-wood" type="checkbox" />
                                    <label for="armchair-wood">Фанера</label>
                                </li>
                            </ul>
                        </div>
                        <div class="box">
                            <h4 class="filteropentitle box-title-closed">Бельевой ящик</h4>
                            <ul class="list box-list">
                                <li>
                                    <input class="filter-items" id="armchair-yes" type="checkbox" />
                                    <label for="armchair-yes">Да</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-no" type="checkbox" />
                                    <label for="armchair-no">Нет</label>
                                </li>
                            </ul>
                        </div>
                        <div class="armrest">
                            <h4 class="filteropentitle armrest-title-closed">Подлокотники</h4>
                            <ul class="list armrest-list">
                                <li>
                                    <input class="filter-items" id="armchair-armrestno" type="checkbox" />
                                    <label for="armchair-armrestno">Нет</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-armrestldsp" type="checkbox" />
                                    <label for="armchair-armrestldsp">ЛДСП</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-armrestsoft" type="checkbox" />
                                    <label for="armchair-armrestsoft">Мягкие</label>
                                </li>
                            </ul>
                        </div>
                        <div class="containing">
                            <h4 class="filteropentitle containing-title-closed">Наполнение</h4>
                            <ul class="list containing-list">
                                <li>
                                    <input class="filter-items" id="armchair-spring" type="checkbox" />
                                    <label for="armchair-spring">Пружинный блок</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-penoliuretan" type="checkbox" />
                                    <label for="armchair-penoliuretan">Пенолиуретан</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-snakespring" type="checkbox" />
                                    <label for="armchair-snakespring">Пружинная змейка</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="armchair-bonnel" type="checkbox" />
                                    <label for="armchair-bonnel">Пружинный блок “Боннель”</label>
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
                                    <a href="../beds/bed1.html" class="goodsimg-main card_main">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/armchairs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
        </div>
        <div class="tabs__content">
            <div class="single-goods bankets container">
                <form class="filter marginhas col-xl-3 col-lg-3">
                    <div class="filterOpen title">
                        <h3>Подбор по параметрам:</h3>
                        <img src="../../assets/img/elements/filter-icon.svg" alt="">
                    </div>

                    <div id="filterContent" class="content">
                        <div class="styles">
                            <h4 class="filteropentitle style-title-closed">Cтиль</h4>
                            <ul class="list style-list">
                                <li>
                                    <input class="filter-items" id="banket-classic" type="checkbox" />
                                    <label for="banket-classic">Классика</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-neoclassic" type="checkbox" />
                                    <label for="banket-neoclassic">Неоклассика</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-modern" type="checkbox" />
                                    <label for="banket-modern">Современный</label>
                                </li>
                            </ul>
                        </div>
                        <div class="type">
                            <h4 class="filteropentitle type-title-closed">Тип</h4>
                            <ul class="list type-list">
                                <li>
                                    <input class="filter-items" id="banket" type="checkbox" />
                                    <label for="banket">Банкетка</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-noback" type="checkbox" />
                                    <label for="banket-noback">Банкетки без спинки</label>
                                </li>
                            </ul>
                        </div>
                        <div class="direction">
                            <h4 class="filteropentitle direction-title-closed">Направление</h4>
                            <ul class="list direction-list">
                                <li>
                                    <input class="filter-items" id="banket-office" type="checkbox" />
                                    <label for="banket-office">Спальни</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-softfurnit" type="checkbox" />
                                    <label for="banket-softfurnit">Мягкая мебель</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-interior" type="checkbox" />
                                    <label for="banket-interior">Предметы интерьера</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-other" type="checkbox" />
                                    <label for="banket-other">Сторонняя продукция</label>
                                </li>
                            </ul>
                        </div>
                        <div class="mechanism">
                            <h4 class="filteropentitle mechanism-title-closed">Механизм</h4>
                            <ul class="list mechanism-list">
                                <li>
                                    <input class="filter-items" id="banket-no-mechanism" type="checkbox" />
                                    <label for="banket-no-mechanism">Без механизма</label>
                                </li>
                            </ul>
                        </div>
                        <div class="colors">
                            <h4 class="filteropentitle colors-title-closed">Цвет обивки</h4>
                            <ul class="list colors-list">
                                <li>
                                    <input class="filter-items" id="banket-beige" type="checkbox" />
                                    <label for="banket-beige">Бежевый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-white" type="checkbox" />
                                    <label for="banket-white">Белый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-blue" type="checkbox" />
                                    <label for="banket-blue">Голубой</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-yellow" type="checkbox" />
                                    <label for="banket-yellow">Желтый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-green" type="checkbox" />
                                    <label for="banket-green">Зеленый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-brown" type="checkbox" />
                                    <label for="banket-brown">Коричневый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-red" type="checkbox" />
                                    <label for="banket-red">Красный</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-orange" type="checkbox" />
                                    <label for="banket-orange">Оранжевый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-pattern" type="checkbox" />
                                    <label for="banket-pattern">Рисунок</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-grey" type="checkbox" />
                                    <label for="banket-grey">Серый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-lightblue" type="checkbox" />
                                    <label for="banket-lightblue">Синий</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-violet" type="checkbox" />
                                    <label for="banket-violet">Фиолетовый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-black" type="checkbox" />
                                    <label for="banket-black">Черный</label>
                                </li>
                            </ul>
                        </div>
                        <div class="cloth">
                            <h4 class="filteropentitle cloth-title-closed">Тип ткани</h4>
                            <ul class="list cloth-list">
                                <li>
                                    <input class="filter-items" id="banket-velur" type="checkbox" />
                                    <label for="banket-velur">Велюр</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-jacard" type="checkbox" />
                                    <label for="banket-jacard">Жаккард</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-korfu" type="checkbox" />
                                    <label for="banket-korfu">Корфу</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-microvelt" type="checkbox" />
                                    <label for="banket-microvelt">Микровельвет</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-rogoje" type="checkbox" />
                                    <label for="banket-rogoje">Рогожка</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-shenill" type="checkbox" />
                                    <label for="banket-shenill">Шенилл</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-ecoskin" type="checkbox" />
                                    <label for="banket-ecoskin">Экокожа</label>
                                </li>
                            </ul>
                        </div>
                        <div class="containing">
                            <h4 class="filteropentitle containing-title-closed">Наполнение</h4>
                            <ul class="list containing-list">
                                <li>
                                    <input class="filter-items" id="banket-penoliuretan" type="checkbox" />
                                    <label for="banket-penoliuretan">Пенолиуретан</label>
                                </li>
                            </ul>
                        </div>
                        <div class="frame">
                            <h4 class="filteropentitle frame-title-closed">Каркас</h4>
                            <ul class="list frame-list">
                                <li>
                                    <input class="filter-items" id="banket-ldsp" type="checkbox" />
                                    <label for="banket-ldsp">ЛДСП</label>
                                </li>
                            </ul>
                        </div>
                        <div class="box">
                            <h4 class="filteropentitle box-title-closed">Бельевой ящик</h4>
                            <ul class="list box-list">
                                <li>
                                    <input class="filter-items" id="banket-yes" type="checkbox" />
                                    <label for="banket-yes">Да</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-no" type="checkbox" />
                                    <label for="banket-no">Нет</label>
                                </li>
                            </ul>
                        </div>
                        <div class="armrest">
                            <h4 class="filteropentitle armrest-title-closed">Подлокотники</h4>
                            <ul class="list armrest-list">
                                <li>
                                    <input class="filter-items" id="banket-armrestno" type="checkbox" />
                                    <label for="banket-armrestno">Нет</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-armrestldsp" type="checkbox" />
                                    <label for="banket-armrestldsp">ЛДСП</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="banket-armrestsoft" type="checkbox" />
                                    <label for="banket-armrestsoft">Мягкие</label>
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/bankets.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
        </div>
        <div class="tabs__content">
            <div class="single-goods poofs container">
                <form class="filter marginhas col-xl-3 col-lg-3">
                    <div class="filterOpen title">
                        <h3>Подбор по параметрам:</h3>
                        <img src="../../assets/img/elements/filter-icon.svg" alt="">
                    </div>

                    <div id="filterContent" class="content">
                        <div class="styles">
                            <h4 class="filteropentitle style-title-closed">Cтиль</h4>
                            <ul class="list style-list">
                                <li>
                                    <input class="filter-items" id="poofs-classic" type="checkbox" />
                                    <label for="poofs-classic">Классика</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-neoclassic" type="checkbox" />
                                    <label for="poofs-neoclassic">Неоклассика</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-modern" type="checkbox" />
                                    <label for="poofs-modern">Современный</label>
                                </li>
                            </ul>
                        </div>
                        <div class="direction">
                            <h4 class="filteropentitle direction-title-closed">Направление</h4>
                            <ul class="list direction-list">
                                <li>
                                    <input class="filter-items" id="poofs-softfurnit" type="checkbox" />
                                    <label for="poofs-softfurnit">Мягкая мебель</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-other" type="checkbox" />
                                    <label for="poofs-other">Сторонняя продукция</label>
                                </li>
                            </ul>
                        </div>
                        <div class="mechanism">
                            <h4 class="filteropentitle mechanism-title-closed">Механизм</h4>
                            <ul class="list mechanism-list">
                                <li>
                                    <input class="filter-items" id="poofs-no-mechanism" type="checkbox" />
                                    <label for="poofs-no-mechanism">Без трансформации</label>
                                </li>
                            </ul>
                        </div>
                        <div class="colors">
                            <h4 class="filteropentitle colors-title-closed">Цвет обивки</h4>
                            <ul class="list colors-list">
                                <li>
                                    <input class="filter-items" id="poofs-beige" type="checkbox" />
                                    <label for="poofs-beige">Бежевый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-white" type="checkbox" />
                                    <label for="poofs-white">Белый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-blue" type="checkbox" />
                                    <label for="poofs-blue">Голубой</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-yellow" type="checkbox" />
                                    <label for="poofs-yellow">Желтый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-green" type="checkbox" />
                                    <label for="poofs-green">Зеленый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-brown" type="checkbox" />
                                    <label for="poofs-brown">Коричневый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-red" type="checkbox" />
                                    <label for="poofs-red">Красный</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-orange" type="checkbox" />
                                    <label for="poofs-orange">Оранжевый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-pattern" type="checkbox" />
                                    <label for="poofs-pattern">Рисунок</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-grey" type="checkbox" />
                                    <label for="poofs-grey">Серый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-lightblue" type="checkbox" />
                                    <label for="poofs-lightblue">Синий</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-violet" type="checkbox" />
                                    <label for="poofs-violet">Фиолетовый</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-black" type="checkbox" />
                                    <label for="poofs-black">Черный</label>
                                </li>
                            </ul>
                        </div>
                        <div class="cloth">
                            <h4 class="filteropentitle cloth-title-closed">Тип ткани</h4>
                            <ul class="list cloth-list">
                                <li>
                                    <input class="filter-items" id="poofs-shenill" type="checkbox" />
                                    <label for="poofs-shenill">Шенилл</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-microvelt" type="checkbox" />
                                    <label for="poofs-microvelt">Микровельвет</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-rogoje" type="checkbox" />
                                    <label for="poofs-rogoje">Рогожка</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-ecoskin" type="checkbox" />
                                    <label for="poofs-ecoskin">Экокожа</label>
                                </li>
                            </ul>
                        </div>
                        <div class="containing">
                            <h4 class="filteropentitle containing-title-closed">Наполнение</h4>
                            <ul class="list containing-list">
                                <li>
                                    <input class="filter-items" id="poofs-penoliuretan" type="checkbox" />
                                    <label for="poofs-penoliuretan">Пенолиуретан</label>
                                </li>
                            </ul>
                        </div>
                        <div class="frame">
                            <h4 class="filteropentitle frame-title-closed">Каркас</h4>
                            <ul class="list frame-list">
                                <li>
                                    <input class="filter-items" id="poofs-ldsp" type="checkbox" />
                                    <label for="poofs-ldsp">ЛДСП</label>
                                </li>
                            </ul>
                        </div>
                        <div class="box">
                            <h4 class="filteropentitle box-title-closed">Бельевой ящик</h4>
                            <ul class="list box-list">
                                <li>
                                    <input class="filter-items" id="poofs-yes" type="checkbox" />
                                    <label for="poofs-yes">Да</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-no" type="checkbox" />
                                    <label for="poofs-no">Нет</label>
                                </li>
                            </ul>
                        </div>
                        <div class="armrest">
                            <h4 class="filteropentitle armrest-title-closed">Подлокотники</h4>
                            <ul class="list armrest-list">
                                <li>
                                    <input class="filter-items" id="poofs-armrestno" type="checkbox" />
                                    <label for="poofs-armrestno">Нет</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-armrestldsp" type="checkbox" />
                                    <label for="poofs-armrestldsp">ЛДСП</label>
                                </li>
                                <li>
                                    <input class="filter-items" id="poofs-armrestsoft" type="checkbox" />
                                    <label for="poofs-armrestsoft">Мягкие</label>
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="main_img">
                                    </a>
                                    <div class="img_markers">
                                        <img src="../../assets/img/goods/sofa/poofs.jpg" alt=""
                                            class="img_item1">
                                        <img src="../../assets/img/goods/beds/item (3).jpg" alt=""
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
        </div>
    </div>

    <div id="addedToBasket">
        <p>Товар добавлен в корзину</p>
        <div id="addedItemClose">
            <img src="../../assets/img/elements/menu-close-white.svg" alt="">
        </div>
    </div>
</main> --}}
@endsection