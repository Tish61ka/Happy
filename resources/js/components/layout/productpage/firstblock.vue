<template>
  <div class="container">
    <p class="pagination">
      <router-link :to="{ name: 'Index' }"> Home </router-link> /
      <router-link :to="{ name: 'Catalog' }"> Catalog </router-link>/ {{ product.title }}
    </p>
    <h1 class="h1">{{ product.title }}</h1>
    <div class="main-info">
      <div>
        <img :src="product.image" alt="No Ethernet" />
      </div>
      <div>
        <div>
          <div>
            <h2>Состав:</h2>
            <p>{{ product.structure }}</p>
          </div>
          <div>
            <p>Цена: {{ product.price }}₽</p>
            <p>цена указана за 100г</p>
            <button v-if="id_user" @click="AddToCart(product.id)">Добавить +</button>
          </div>
        </div>
        <h2>Описание:</h2>
        <p>{{ product.description }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      id_product: this.$route.params["id"],
      product: [],
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
  },
};
</script>

<style lang="css">
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
.h1 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 36px;
  margin-bottom: 70px;
}
.main-info {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 100%;
  height: 739px;
  padding: 50px 100px;
  background-image: url("/img/backproduct.png");
}
.main-info > div:first-child {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 268px;
  height: 441px;
  background: #ffffff;
  border: 4px solid #b09cd7;
  border-radius: 25px;
}
.main-info > div:first-child img {
  width: 180%;
  object-fit: cover;
}
.main-info > div:last-child {
  display: flex;
  flex-direction: column;
  width: 70%;
}
.main-info > div:last-child > div {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  height: 40%;
}
.main-info > div:last-child > div > div:first-child h2 {
  margin-bottom: 20px;
}
.main-info > div:last-child > div > div:first-child p {
  white-space: pre-line;
  line-height: 30px;
}
.main-info > div:last-child > div > div:last-child {
  display: flex;
  flex-direction: column;
  height: 100%;
}
.main-info > div:last-child > div > div:last-child p {
  margin-bottom: 20px;
}
.main-info > div:last-child > div > div:last-child p:first-child {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 600;
  font-size: 24px;
}
.main-info > div:last-child > div > div:last-child p:last-child {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  color: #7a7171;
}
.main-info > div:last-child > div > div:last-child button {
  background: #ffffff;
  border: 1px solid #000000;
  border-radius: 7px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
  width: 200px;
  height: 50px;
  cursor: pointer;
}
.main-info > div:last-child h2 {
  margin-bottom: 20px;
}
.main-info > div:last-child > p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 21px;
  letter-spacing: 0.14em;
}
</style>
