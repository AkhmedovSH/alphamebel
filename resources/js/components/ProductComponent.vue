<template>
<main>
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
                <li>Спальни</li>
            </a>
        </ul>
    </div>
    <div class="collections berooms-content container">
        <div class="collections-filter bedrooms-filter col-xl-3">
            <div class="filterOpen main-title">
                <h3>Подбор по параметрам:</h3>
                <img src="/assets/img/elements/filter-icon.svg" alt="">
            </div>
            <form id="filterContent" class="content">
                <span>Selected Ids: {{ filterIds }}</span>
                <div class="styles" v-for="(filter, index) in filters" :key="index">
                    <h4>{{ filter.title }}</h4>
                    <ul>
                        <li v-for="(attribute, index) in filter.attributes" :key="index" >
                            <input class="filter-items" :id="'classic' + attribute.id" type="checkbox"
                            v-model="attribute.checked"
                            @click="checkedFilters(attribute)"
                            :true-value="1"
                            :false-value="0"
                            />
                            <label :for="'classic' + attribute.id">{{ attribute.title }}</label>
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
                            <p class="title">Спальни “Ramini Bosko”</p>
                            <div class="img">
                                <img src="/assets/img/collections/beds/raminibosco/ramini-bosko.jpg" alt="">
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
    </div>
</main>
</template>

<script>
    export default {
        props:['products', 'filters', 'category'],
         data() {
            return {
                data: {},
                filterIds: []
            };
        },
        methods: {
            checkedFilters(attribute){
                console.log(this.filters[0]['attributes'][0]);
            }
        },
        mounted() {
            console.log(this.products, this.filters, this.category)
        }
    }
</script>
