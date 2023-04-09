<template>
  <div>
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
      id_product: this.$route.params["id"],
      product: [],
      // sort_on: [],
      id_user: localStorage.getItem("id_user"),
      count: 1,
    };
  },
  mounted() {
    this.OneProducts();
  },
  methods: {
    OneProducts() {
      axios.get(`/api/product/${this.id_product}`).then((res) => {
        this.product = res.data.content;
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

<style lang="scss" scoped></style>
