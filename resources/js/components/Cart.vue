<template>
    <div class="container-cart">
        <Aside></Aside>
        <CartContent v-if="this.$route.name === 'Cart'"></CartContent>
        <OrderContent v-if="this.$route.name === 'Order'"></OrderContent>
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
    mounted() {
        //Menu
    },
};
</script>

<style lang="css" scoped>
.container-cart {
    position: relative;
    width: 100%;
}
/*main*/
</style>
