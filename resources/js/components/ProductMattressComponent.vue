<template>
<main>
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
                <li>Матрасы</li>
            </a>
        </ul>
    </div>
    <div class="tabs single-fliter">
        <h1 class="sales-single-filter-open">Предметы мебели</h1>
        <ul class="tabs__caption single-filter-list container">
            <li class="active tables col-xl-2 col-lg-1">
                матрасы
            </li>
            <li class="col-xl-2 col-lg-2">
                защитные чехлы
            </li>
            <li class="col-xl-2 col-lg-2">
                наматрасники
            </li>
            <li class="col-xl-1 col-lg-1">
                одеяла
            </li>
            <li class="col-xl-2 col-lg-2">
                подушки
            </li>
        </ul>
        <div class="tabs__content active">
            <Mattress
                :products="products"
                :filters="filters"
                :category="category"
                :attributes="attributes"
            ></Mattress>
        </div>
        <div class="tabs__content">
           <Covers
                :products="products2"
                :filters="filters2"
                :category="category2"
                :attributes="attributes2"
           ></Covers>
        </div>
        <div class="tabs__content">
            <MattressCovers
                :products="products3"
                :filters="filters3"
                :category="category3"
                :attributes="attributes3"
            ></MattressCovers>
        </div>
        <div class="tabs__content">
            <Coverlet
                :products="products4"
                :filters="filters4"
                :category="category4"
                :attributes="attributes4"
            ></Coverlet>
        </div>
        <div class="tabs__content">
            <Pillows
                :products="products5"
                :filters="filters5"
                :category="category5"
                :attributes="attributes5"
            ></Pillows>
        </div>
    </div>
</main>
</template>

<script>
import Mattress from './mattress/MattressComponent'
import Covers from './mattress/CoversComponent'
import Coverlet from './mattress/CoverletComponent'
import MattressCovers from './mattress/MattressCoversComponent'
import Pillows from './mattress/PillowsComponent'
export default {
    components: { Mattress, Covers, Coverlet, MattressCovers, Pillows },
    props: ['products', 'filters', 'category', 'attributes',
            'products2', 'filters2', 'category2', 'attributes2',
            'products3', 'filters3', 'category3', 'attributes3',
            'products4', 'filters4', 'category4', 'attributes4',
            'products5', 'filters5', 'category5', 'attributes5',
            'credit'],
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
