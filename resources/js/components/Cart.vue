<template>
    <div class="container-cart">
        <Aside></Aside>
        <div class="main">
            <CartContent v-if="this.$route.name === 'Cart'"></CartContent>
            <OrderContent v-if="this.$route.name === 'Order'"></OrderContent>
        </div>
    </div>
</template>

<script>
import Aside from "./layout/cartpage/aside.vue";
import OrderContent from "./layout/cartpage/OrderContent.vue";
import CartContent from "./layout/cartpage/CartContent.vue";

export default {
    data() {
        return {
            show: "cart",
        };
    },
    components: {
        Aside,
        OrderContent,
        CartContent,
    },
    mounted() {},
};
</script>

<style lang="css" scoped>
.container-cart {
    position: relative;
    width: 100%;
}
.main {
    position: absolute;
    width: calc(100% - 300px);
    left: 300px;
    min-height: 100vh;
    background-color: white;
    transition: 500ms;
}

.main.active {
    width: calc(100% - 80px);
    left: 80px;
}
/*main*/
@media (max-width: 1590px) {
    .main {
        width: 100%;
        left: 0;
    }

    .main.active {
        width: calc(100% - 80px);
        left: 80px;
    }
}

@media (max-width: 1200px) {
    .main {
        width: 100%;
        left: 0;
    }

    .main.active {
        width: calc(100% - 300px);
        left: 0;
    }
}

@media (max-width: 928px) {
    .main.active .toggle {
        position: fixed;
        right: 0%;
        left: initial;
    }
}

@media (max-width: 610px) {
    .main.active .toggle {
        position: fixed;
        right: 0%;
        left: initial;
    }
}
</style>
