<template>
<main>
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
                <li>{{ category.title }}</li>
            </a>
        </ul>
    </div>
    <div class="collections berooms-content container">
        <div class="collections-filter bedrooms-filter col-xl-3">
            <div class="filterOpen main-title">
                <h3>Подбор по параметрам:</h3>
                <img src="/assets/img/elements/filter-icon.svg" alt="">
            </div>
            <div id="filterContent" class="content">
                <div class="styles" v-for="(filter, index) in filters" :key="index">
                    <h4>{{ filter.title }}</h4>
                    <ul>
                        <li v-for="(attribute, index) in filter.attributes" :key="index" >
                            <input class="filter-items" :id="'classic' + attribute.id" type="checkbox"
                            v-model="attribute.checked"
                            @click="selectAttribute(attribute)"
                            :true-value="1"
                            :false-value="0"
                            />
                            <label :for="'classic' + attribute.id">{{ attribute.title }}</label>
                        </li>
                    </ul>
                </div>
                <div class="collections-filter__btns bedrooms-filter__btns">
                    <button @click="cancelFilters()" id="reset">
                        Сбросить фильтры
                    </button>
                    <button @click="filterByAttributes()" id="accept">
                        ПРИМЕНИТЬ
                    </button>
                </div>
            </div>
        </div>
        <div class="collections-cards col-xl-9 col-lg-12">
            <div class="cards-row w-100 p-0 m-0 contents">
                <div class="blogBox moreBox col-xl-6 col-lg-6 col-md-6 col-sm-6" v-for="(product, index) in data" :key="index">
                    <div class="card">
                        <a :href="'/singleProductLeft/' + category.id + '/' + product.id">
                            <p class="title">{{ product.title }}</p>    
                            <div class="img">
                                <img :src="'/uploads/products/' + product.image">
                            </div>
                        </a>
                        <div class="details">
                            <div class="price">
                                <div>от {{ product.sale != 0 ? product.price - ((product.price / 100) * product.sale) : product.price }} сум
                                    <div class="more" v-if="product.note">?<span>{{ product.note }}</span>
                                    </div>
                                </div>
                                <span class="old-price" v-if="product.sale != 0">{{ product.price }} сум</span>
                            </div>
                            <div class="credit-price">
                                <div>
                                    <span>В кредит от</span>
                                    <p>{{ calculate(product) }} сум/мес</p>
                                </div>
                                <a :href="'/singleProductLeft/' + category.id + '/' + product.id">
                                    <button>ВЫБРАТЬ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="more">
                <button id="loadMore">
                    ПОКАЗАТЬ ЕЩЕ ТОВАРЫ
                </button>
            </div> -->
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
