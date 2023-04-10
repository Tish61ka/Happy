<template>
    <section class="catalog-content">
        <p class="pagination">
            <router-link :to="{ name: 'Index' }"> Home </router-link> / Catalog
        </p>
        <h1>Каталог</h1>
        <p class="shown">Показано {{ products.length }}</p>
        <div class="active-filter">
            <div class="filter-1">
                <p>Вкус:</p>
                <p>Шоколадный</p>
                <svg
                    width="13"
                    height="15"
                    viewBox="0 0 13 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <rect
                        x="1.73828"
                        y="0.175781"
                        width="17"
                        height="2"
                        rx="1"
                        transform="rotate(50 1.73828 0.175781)"
                        fill="black"
                    />
                    <rect
                        y="13.4902"
                        width="17"
                        height="2"
                        rx="1"
                        transform="rotate(-50 0 13.4902)"
                        fill="black"
                    />
                </svg>
            </div>
            <div class="filter-1">
                <p>Вафля:</p>
                <p>Итальянские вафли</p>
                <svg
                    width="13"
                    height="15"
                    viewBox="0 0 13 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <rect
                        x="1.73828"
                        y="0.175781"
                        width="17"
                        height="2"
                        rx="1"
                        transform="rotate(50 1.73828 0.175781)"
                        fill="black"
                    />
                    <rect
                        y="13.4902"
                        width="17"
                        height="2"
                        rx="1"
                        transform="rotate(-50 0 13.4902)"
                        fill="black"
                    />
                </svg>
            </div>
            <p class="clear-filter">Очистить фильтр</p>
        </div>
        <div class="catalog-product">
            <div v-for="product in products" :key="product" class="card-item">
                <div class="border-img">
                    <img :src="product.image" alt="No Ethernet" />
                </div>
                <router-link :to="{ path: '/product/' + product.id }">
                    <h3>{{ product.title }}</h3>
                </router-link>
                <div class="bot-flex-card">
                    <button v-if="id_user" @click="AddToCart(product.id)">
                        Добавить +
                    </button>
                    <div class="flex-cost">
                        <p>{{ product.price }}p</p>
                        <p>100 g</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            products: [],
            // sort_on: [],
            id_user: localStorage.getItem("id_user"),
            count: 1,
        };
    },
    mounted() {
        this.AllProducts();
    },
    methods: {
        AllProducts() {
            axios.get("/api/all/products").then((res) => {
                this.products = res.data.content;
                this.load = false;
            });
        },
        AddToCart(product_id) {
            axios.post("/api/add/to/cart", {
                _method: "PATCH",
                product_id: product_id,
                user_id: this.id_user,
                count: this.count,
            });
        },
        // Sort() {
        //     for (let index = 0; index < this.products.length; index++) {
        //         let parse = this.products[index].title.split(" ")[0];
        //         console.log(this.sort_on.includes(parse));
        //     }
        // },
    },
};
</script>

<style lang="css" scoped>
.catalog-content {
    margin-top: 5px;
    margin-left: 130px;
}
.pagination,
.pagination a {
    font-family: "Comfortaa";
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    color: #bfbfbf;
    margin-bottom: 30px;
    margin-left: 2px;
}
.catalog-content h1 {
    font-family: "Comfortaa";
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    margin-bottom: 30px;
}
.shown {
    font-family: "Comfortaa";
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    color: #bfbfbf;
    margin-left: 2px;
}
.active-filter {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-top: 25px;
}
.filter-1 {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px 13px;
    background: #ece4fe;
    border-radius: 11px;
    margin-right: 25px;
}
.filter-1 p:first-child {
    font-family: "Comfortaa";
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    color: #808080;
}
.filter-1 p:nth-child(2) {
    font-family: "Comfortaa";
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    color: #000000;
    margin-left: 5px;
    margin-right: 10px;
}
.filter-1 svg {
    cursor: pointer;
}
.clear-filter {
    font-family: "Comfortaa";
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    color: #b09cd7;
    border-bottom: 1px dashed #b09cd7;
    padding-bottom: 5px;
    cursor: pointer;
}
.catalog-product {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;

    flex-wrap: wrap;
    margin-top: 50px;
}
.card-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 370px;
    height: 450px;
    padding: 30px 40px;
    background: #ffffff;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    margin-bottom: 50px;
}
.border-img {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 70%;
    height: 244px;
    border: 1px solid #ededed;
    border-radius: 25px;
    margin-bottom: 15px;
}
.card-item img {
    width: 40%;
}
.card-item h3 {
    width: 250px;
    text-align: center;
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 17px;
    color: #000000;
}
.bot-flex-card {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    margin-top: 50px;
}
.bot-flex-card button {
    background: #ffffff;
    border: 1px solid #000000;
    border-radius: 7px;
    padding: 10px 15px;
    height: 50px;
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 17px;
    color: #000000;
    cursor: pointer;
}
.flex-cost {
    display: flex;
    flex-direction: column;
}
.flex-cost p:first-child {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    color: #000000;
}
.flex-cost p:last-child {
    font-family: "Roboto";
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    color: #ababab;
}
</style>
