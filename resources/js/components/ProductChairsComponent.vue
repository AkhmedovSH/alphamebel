<template>
<main>
    <div class="crumbs container">
        <ul>
            <a href="/">
                <li>Главная / </li>
            </a>
            <a>
               <li>Столы и стулья</li>
            </a>
        </ul>
    </div>
    <div class="tabs single-fliter">
        <h1 class="sales-single-filter-open">Предметы мебели</h1>
        <ul class="tabs__caption single-filter-list container">
            <li class="active tables col-xl-2">
                столы
            </li>
            <li class="chairs col-xl-2">
                стулья
            </li>
        </ul>
        <div class="tabs__content active">
            <Tables
                :products="products"
                :filters="filters"
                :category="category"
                :attributes="attributes"
            ></Tables>
        </div>
        <div class="tabs__content">
           <Chairs
                :products="products2"
                :filters="filters2"
                :category="category2"
                :attributes="attributes2"
            ></Chairs>
        </div>
    </div>
</main>
</template>

<script>
import Tables from './chairs/TablesComponent'
import Chairs from './chairs/ChairsComponent'
export default {
    components: { Chairs, Tables},
    props: ['products', 'filters', 'category', 'attributes',
            'products2', 'filters2', 'category2', 'attributes2',
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
                
                return newPrice.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
            } else {
                sale = (product.price / 100) * this.credit.credit
                
                newPrice = (product.price * (sale/product.price)) / this.credit.month
                return newPrice.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
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
                    this.data[i]['checked'] = false
                }
                for (let i = 0; i < this.filters.length; i++) {
                    for (let j = 0; j < this.filters[i]['attributes'].length; j++) {
                        this.filters[i]['attributes'][j]['checked'] = false
                    }
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
