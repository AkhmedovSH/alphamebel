<template>
<main>
    <div class="single-goods armchairs container">
        <form class="filter marginhas col-xl-3 col-lg-3">
            <div class="filterOpen title">
                <h3>Подбор по параметрам:</h3>
                <img src="/assets/img/elements/filter-icon.svg" alt="">
            </div>

            <div id="filterContent" class="content">
                <div class="styles" v-for="(filter, index) in filters" :key="index">
                    <h4 class="filteropentitle style-title-closed">{{ filter.title }}</h4>
                    <ul class="list style-list">
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
                <div class="btns">
                    <button type="button" @click="cancelFilters()" id="reset">
                        Сбросить фильтры
                    </button>
                    <button type="button" @click="filterByAttributes()" id="accept">
                        ПРИМЕНИТЬ
                    </button>
                </div>
            </div>
        </form>
        <div id="goodswrapper" class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="cards contents">
                <div class="blogBox moreBox sub-content col-xl-4 col-lg-6 col-md-6 col-sm-12" v-for="(product, index) in data" :key="index">
                    <div class="goodscard content">
                        <div class="img">
                            <a :href="'/singleProductRight/' + category.id + '/' + product.id" class="goodsimg-main card_main">
                                <img :src="'/uploads/products/' + product.image"  class="main_img">
                            </a>
                            <div class="img_markers">
                                <img src="/assets/img/goods/sofa/sofas.jpg" class="img_item1">
                                <img src="/assets/img/goods/beds/item (3).jpg" class="img_item2">
                            </div>
                            <div class="stock">
                                <span v-if="product.sale != 0">-10%</span>
                                <p v-if="product.sale != 0">Распродажа</p>
                            </div>
                        </div>
                        <div class="desc">
                            <a :href="'/singleProductRight/' + category.id + '/' + product.id">
                                <p class="title">{{ product.title }}</p>
                                <p class="code">Код: {{ product.code }}</p>
                                <p class="gooddesc" v-html="product.description"></p>
                                <div class="size">
                                    <p>Ш: {{ product.width }}</p>
                                    <p>Д: {{ product.length }}</p>
                                    <p>В: {{ product.height }}</p>
                                </div>
                            </a>
                            <div class="order">
                                <div class="price">
                                    <p>{{ product.sale != 0 ? (product.price / 100) * product.sale : product.price }} сум</p>
                                    <p>{{ product.price }} сум</p>
                                </div>
                                <a :href="'/singleProductRight/' + category.id + '/' + product.id" class="add">КУПИТЬ</a>
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
