<template>
  <div class="topbar">
    <div class="toggle">
      <svg
        width="38"
        height="24"
        viewBox="0 0 38 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <rect width="38" height="5" rx="2.5" fill="black" />
        <rect y="19" width="38" height="5" rx="2.5" fill="black" />
        <rect y="9" width="38" height="5" rx="2.5" fill="black" />
      </svg>
    </div>
  </div>
  <h1 class="h1">Корзина</h1>
  <!--Bot-->
  <div class="details">
    <div class="recentOrders">
      <div
        style="
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 90vh;
        "
        v-if="load == true"
      >
        <div class="fulfilling-bouncing-circle-spinner">
          <div class="circle"></div>
          <div class="orbit"></div>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <td>Фото</td>
            <td>Название</td>
            <td>Количество</td>
            <td>Стоимость</td>
            <td>Действия</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in products" :key="product">
            <td class="img-td">
              <div>
                <img :src="product.product.image" alt="No Ethernet" />
              </div>
            </td>
            <td>{{ product.product.title }}</td>
            <td class="count-td">
              <div>
                <button
                  @click="
                    product.count++;
                    AddToCart(product.product.id, product.count);
                  "
                >
                  +
                </button>
                <p>{{ product.count }}</p>
                <button
                  @click="
                    product.count > 1 ? product.count-- : (product.count += 0);
                    MinusCart(product.product.id, product.count);
                  "
                >
                  -
                </button>
              </div>
            </td>
            <td>{{ product.product.price * product.count }}</td>
            <td class="btn-td">
              <button @click="DestroyProduct(product.id)">Убрать</button>
            </td>
          </tr>
        </tbody>
      </table>
      <div v-if="products.length == 0">
        <h1 class="cart-empty">Корзина пуста!</h1>
      </div>
      <div class="all-cost" v-if="products.length != 0">
        <button @click="DestroyAll()">Очистить все</button>
        <button @click="CreateOrder()">Оформить заказ</button>
        <p>Итоговая сумма: {{ itogo }} руб</p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      user_id: localStorage.getItem("id_user"),
      products: [],
      itogo: 0,
      load: true,
    };
  },
  mounted() {
    let toggle = document.querySelector(".toggle");
    let navigationCart = document.querySelector(".navigation-cart");
    let main = document.querySelector(".main");

    toggle.onclick = function () {
      navigationCart.classList.toggle("active");
      main.classList.toggle("active");
    };

    //
    let list = document.querySelectorAll(".navigation-cart li:not(:first-child)");
    function activeLink() {
      list.forEach((item) => item.classList.remove("hovered"));
      this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("click", activeLink));
    this.AllCart();
  },
  methods: {
    AllCart() {
      axios.get(`/api/cart/all/${this.user_id}`).then((res) => {
        this.products = res.data.content;
        console.log(this.products);
        this.itogo = 0;
        console.log(this.products);
        for (let index = 0; index < this.products.length; index++) {
          this.itogo += this.products[index].count * this.products[index].product.price;
        }
        this.load = false;
      });
    },
    DestroyProduct(id) {
      axios.delete(`/api/cart/destroy/${id}`).then((res) => {
        this.AllCart();
      });
    },
    AddToCart(product_id, count) {
      axios
        .post("/api/add/to/cart", {
          _method: "PATCH",
          product_id: product_id,
          user_id: this.user_id,
          count: count,
        })
        .then((res) => {
          this.AllCart();
        });
    },
    MinusCart(product_id, count) {
      axios
        .post("/api/minus/to/cart", {
          _method: "PATCH",
          product_id: product_id,
          user_id: this.user_id,
          count: count,
        })
        .then((res) => {
          this.AllCart();
        });
    },
    CreateOrder() {
      axios
        .post("/api/order", { user_id: this.user_id, summ: this.itogo })
        .then((res) => {
          this.AllCart();
        });
    },
    DestroyAll() {
      axios.post("/api/cart/destroyall", { user_id: this.user_id }).then((res) => {
        this.AllCart();
      });
    },
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
  animation: fulfilling-bouncing-circle-spinner-orbit-animation infinite 4000ms ease;
}
.fulfilling-bouncing-circle-spinner .circle {
  height: 60px;
  width: 60px;
  color: var(--second-bg-color);
  display: block;
  border-radius: 50%;
  position: relative;
  border: calc(60px * 0.1) solid var(--second-bg-color);
  animation: fulfilling-bouncing-circle-spinner-circle-animation infinite 4000ms ease;
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
.cart-empty {
  transform: translate(40%);
  margin-top: 150px;
}
.topbar {
  width: 100%;
  height: 60px;
  padding: 0 10px;
}

.toggle {
  position: relative;
  top: 10px;
  width: 50px;
  cursor: pointer;
}

.h1 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
  transform: translate(40%);
  margin-bottom: 30px;
}

.details {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: 1fr;
  grid-gap: 30px;
  margin-top: 10px;
}

.details .recentOrders {
  position: relative;
  min-height: 500px;
  background-color: white;
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
}

.all-views {
  position: relative;
  padding: 11px 34px;
  background: #7356ac;
  border-radius: 14px;
  color: white;
}

.details table {
  width: 100%;
  border-collapse: collapse;
}

.details table thead td {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
}
.details table tbody td {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
}
.details table tbody tr td:not(:last-child) {
  border-right: 1px solid #d9d9d9;
}
.details .recentOrders table tr {
  color: black;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.details .recentOrders table td {
  padding: 19px 19px 19px 0;
}

.details .recentOrders table td:nth-child(2),
.details .recentOrders table td:nth-child(3),
.details .recentOrders table td:nth-child(4) {
  text-align: center;
}

.details .recentOrders table thead td:last-child {
  text-align-last: right;
}
.img-td div {
  width: 120px;
  padding: 3px 19px;
  border: 2px solid #ededed;
  border-radius: 25px;
}
.img-td div img {
  width: 75px;
}
.count-td div {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-left: 10px;
}
.count-td div button {
  width: 20px;
  height: 20px;
  border: none;
  background: transparent;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  cursor: pointer;
  margin-top: -8px;
}
.count-td div button:last-child {
  margin-top: -11px;
}
.btn-td button {
  width: 155.35px;
  height: 28px;
  background: rgba(249, 58, 58, 0.5);
  border-radius: 12px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  text-align: center;
  cursor: pointer;
  border: none;
}
.details .recentOrders table tbody td:last-child {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  transform: translate(0%, 100%);
}
.all-cost {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-end;
  margin-top: 40px;
  margin-bottom: 20px;
}
.all-cost button {
  width: 205.29px;
  height: 37px;
  border-radius: 12px;
  border: none;
  margin-right: 40px;
  cursor: pointer;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
}
.all-cost button:first-child {
  background: rgba(249, 58, 58, 0.5);
}
.all-cost button:nth-child(2) {
  background: #a3deac;
}
.all-cost p {
  font-size: 24px;
}

/* adaptive */

@media (max-width: 1590px) {
  .navigation-cart {
    left: -80px;
  }

  .navigation-cart.active {
    width: 80px;
    left: 0;
  }

  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 80px);
    left: 80px;
  }

  .cardBox {
    grid-gap: 10px;
  }

  .cardBox .card .cardName {
    font-size: 15px;
  }
}

@media (max-width: 1200px) {
  .navigation-cart {
    left: -300px;
  }

  .navigation-cart.active {
    width: 300px;
    left: 0;
  }

  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 300px);
    left: 0;
  }

  .cardBox {
    grid-template-columns: repeat(2, 1fr);
  }

  .details .recentOrders table td {
    padding-right: 5px;
  }

  .details table tbody td {
    font-size: 16px;
  }
}

@media (max-width: 928px) {
  .details {
    grid-template-columns: repeat(1, 1fr);
    width: 100%;
    padding: 10px;
  }

  .h1 {
    width: 100%;
    transform: none;
    text-align: center;
  }
  .recentOrders {
    overflow-x: auto;
  }

  .navigation-cart {
    width: 100%;
    left: -100%;
    z-index: 1000;
  }

  .navigation-cart.active {
    width: 100vw;
    left: 0;
  }

  .toggle {
    z-index: 10001;
  }

  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }
}

@media (max-width: 610px) {
  .cardBox {
    grid-template-columns: repeat(1, 1fr);
  }

  .card:last-child {
    padding-bottom: 20px;
  }

  .details table thead td {
    font-size: 11px;
  }

  .details .recentOrders table td {
    font-size: 11px;
  }

  .details .recentOrders table td:last-child {
    font-size: 10px;
  }
  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }

  .cardHeader h2 {
    font-size: 16px;
  }

  .all-views {
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 10px;
  }

  .recentCustomers table tr td h4 {
    font-size: 14px;
  }

  .recentCustomers table tr td h4 span {
    font-size: 12px;
  }

  .navigation-cart ul li {
    width: 50%;
  }
}
</style>
