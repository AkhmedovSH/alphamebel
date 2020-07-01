@extends('layout')

@section('content')
<main>
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
                <li>Кухни</li>
            </a>
        </ul>
    </div>
    <div class="container">
        <h1 style="
            text-align: center;
            margin: 200px 0 300px 0;
            font-weight: 700;
            font-size: 62px;">Скоро здесь будут
            <span style="
            font-weight: 700;
            color: #FFD700;
            ">кухни</span>...</h1>
    </div>
    <!-- <div class="collections berooms-content container">
        <div class="collections-filter bedrooms-filter col-xl-3">
            <div class="filterOpen main-title">
                <h3>Подбор по параметрам:</h3>
                <img src="../../assets/img/elements/filter-icon.svg" alt="">
            </div>
            <form id="filterContent" class="content">
                <div class="styles">
                    <h4>Cтиль коллекции</h4>
                    <ul>
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
                <div class="brands">
                    <h4>Бренды</h4>
                    <ul>
                        <li><input class="filter-items" id="shatura" type="checkbox" /><label
                                for="shatura">Шатура</label></li>
                    </ul>
                </div>
                <div class="covercolor">
                    <h4>Цвет корпуса коллекции</h4>
                    <ul>
                        <li><input class="filter-items" id="covercolorlight" type="checkbox" /><label
                                for="covercolorlight">Светлый</label></li>
                        <li><input class="filter-items" id="covercolordark" type="checkbox" /><label
                                for="covercolordark">Темный</label>
                        </li>
                    </ul>
                </div>
                <div class="frontcolor">
                    <h4>Цвет фасада коллекции</h4>
                    <ul>
                        <li><input class="filter-items" id="frontcolorlight" type="checkbox" /><label
                                for="frontcolorlight">Светлый</label></li>
                        <li><input class="filter-items" id="frontcolordark" type="checkbox" /><label
                                for="frontcolordark">Темный</label>
                        </li>
                    </ul>
                </div>
                <div class="collections-filter__btns bedrooms-filter__btns">
                    <button type="reset" id="reset">
                        Сбросить фильтры
                    </button>
                    <button type="submit" id="accept">
                        ПРИМЕНИТЬ
                    </button>
                </div>
            </form>
        </div>
        <div class="collections-cards col-xl-9 col-lg-12">
            <div class="cards-row w-100 p-0 m-0 contents">
                <div class="blogBox moreBox col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogBox moreBox col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogBox moreBox col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogBox moreBox col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;"
                    class="blogBox moreBox style-classic col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;"
                    class="blogBox moreBox style-classic col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;"
                    class="blogBox moreBox style-classic col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;"
                    class="blogBox moreBox style-classic col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;"
                    class="blogBox moreBox style-classic col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card">
                        <a href="raminibosco.html">
                            <p class="title">Кухни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="../../assets/img/collections/kitchens/kitchen-collections.jpg" alt="">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от 21 356 000 сум
                                    <div class="more">?<span>Данные в котором сказано что входит в стоимость. К
                                            примему кровать, 2шкафа, 6столов, 12стульев, 2комода и один пуфик</span>
                                    </div>
                                </div>
                                <span class="old-price">30 345 000 сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>300 345 сум/мес</p>
                                </div>
                                                                    <a href="raminibosco.html">
                                    <button>ВЫБРАТЬ</button>
                                </a>
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
    </div> -->
</main>
@endsection