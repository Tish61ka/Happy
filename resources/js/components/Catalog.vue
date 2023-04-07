<template>
    <div
        style="
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
        "
        v-if="load == true"
    >
        <div class="fulfilling-bouncing-circle-spinner">
            <div class="circle"></div>
            <div class="orbit"></div>
        </div>
    </div>

    <div v-for="product in products" ::key="product">
        <h1>{{ product.title }}</h1>
        <img :src="product.image" alt="" />
        <p>{{ product.price }}Р</p>
        <pre>{{ product.structure }}</pre>
        <p>{{ product.description }}</p>
        <button v-if="id_user" @click="AddToCart(product.id)">В корзину</button>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            products: [],
            // sort_on: [],
            id_user: localStorage.getItem("id_user"),
            load: true,
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
.fulfilling-bouncing-circle-spinner,
.fulfilling-bouncing-circle-spinner * {
    box-sizing: border-box;
}
.fulfilling-bouncing-circle-spinner {
    height: 60px;
    width: 60px;
    position: relative;
    animation: fulfilling-bouncing-circle-spinner-animation infinite 4000ms ease;
    display: flex;
}
.fulfilling-bouncing-circle-spinner .orbit {
    height: 60px;
    width: 60px;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 50%;
    border: calc(60px * 0.03) solid var(--second-bg-color);
    animation: fulfilling-bouncing-circle-spinner-orbit-animation infinite
        4000ms ease;
}
.fulfilling-bouncing-circle-spinner .circle {
    height: 60px;
    width: 60px;
    color: var(--second-bg-color);
    display: block;
    border-radius: 50%;
    position: relative;
    border: calc(60px * 0.1) solid var(--second-bg-color);
    animation: fulfilling-bouncing-circle-spinner-circle-animation infinite
        4000ms ease;
    transform: rotate(0deg) scale(1);
}
@keyframes fulfilling-bouncing-circle-spinner-animation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
@keyframes fulfilling-bouncing-circle-spinner-orbit-animation {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1);
    }
    62.5% {
        transform: scale(0.8);
    }
    75% {
        transform: scale(1);
    }
    87.5% {
        transform: scale(0.8);
    }
    100% {
        transform: scale(1);
    }
}
@keyframes fulfilling-bouncing-circle-spinner-circle-animation {
    0% {
        transform: scale(1);
        border-color: transparent;
        border-top-color: inherit;
    }
    16.7% {
        border-color: transparent;
        border-top-color: initial;
        border-right-color: initial;
    }
    33.4% {
        border-color: transparent;
        border-top-color: inherit;
        border-right-color: inherit;
        border-bottom-color: inherit;
    }
    50% {
        border-color: inherit;
        transform: scale(1);
    }
    62.5% {
        border-color: inherit;
        transform: scale(1.4);
    }
    75% {
        border-color: inherit;
        transform: scale(1);
        opacity: 1;
    }
    87.5% {
        border-color: inherit;
        transform: scale(1.4);
    }
    100% {
        border-color: transparent;
        border-top-color: inherit;
        transform: scale(1);
    }
}
</style>
