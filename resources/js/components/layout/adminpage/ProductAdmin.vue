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

  <h1 class="h1-top">Редактирование товаров</h1>
  <!--Bot-->
  <div class="details">
    <div class="recentOrders">
      <Loader v-if="load == true"></Loader>
      <div>
        <div class="item" v-for="product in products" :key="product">
          <div>
            <img :src="product.image" alt="No Ethernet" />
          </div>
          <h2>{{ product.title }}</h2>
          <div>
            <button @click="editProduct(product.id)">
              Редактировать
              <img src="/img/edit.png" alt="No Ethernet" />
            </button>
            <p>{{ product.price }} р</p>
          </div>
          <svg
            @click.prevent="deleteProduct(product.id)"
            width="37"
            height="37"
            viewBox="0 0 37 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9.2487 29.2917C9.2487 30.9875 10.6362 32.375 12.332 32.375H24.6654C26.3612 32.375 27.7487 30.9875 27.7487 29.2917V10.7917H9.2487V29.2917ZM12.332 13.875H24.6654V29.2917H12.332V13.875ZM23.8945 6.16667L2.3529 4.625H14.6445L13.1029 6.16667H7.70703V9.25H29.2904V6.16667H23.8945Z"
              fill="#F93A3A"
            />
          </svg>
        </div>
        <!-- <form class="item-v2 no-edit">
          <div>
            <img src="/img/strawberry.png" alt="No Ethernet" />
            <input type="file" />
            <p>Выберите файл</p>
          </div>
          <h2>Клубничное мороженное с вафельным стаканчиком</h2>
          <input type="text" value="Клубничное мороженное с вафельным стаканчиком" />
          <div>
            <button class="edit" @click.prevent="GoEdit()">
              Редактировать
              <img src="/img/edit.png" alt="No Ethernet" />
            </button>
            <button type="submit" class="save" @click.prevent="GoBehind()">
              Сохранить
              <img src="/img/save.png" alt="No Ethernet" />
            </button>
            <div>
              <input type="text" value="300" />
              <p>300</p>
              р
            </div>
          </div>
          <svg
            width="37"
            height="37"
            viewBox="0 0 37 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9.2487 29.2917C9.2487 30.9875 10.6362 32.375 12.332 32.375H24.6654C26.3612 32.375 27.7487 30.9875 27.7487 29.2917V10.7917H9.2487V29.2917ZM12.332 13.875H24.6654V29.2917H12.332V13.875ZM23.8945 6.16667L2.3529 4.625H14.6445L13.1029 6.16667H7.70703V9.25H29.2904V6.16667H23.8945Z"
              fill="#F93A3A"
            />
          </svg>
        </form>
        <form class="item-v2 no-edit">
          <div>
            <img src="/img/strawberry.png" alt="No Ethernet" />
            <input type="file" />
            <p>Выберите файл</p>
          </div>
          <h2>Клубничное мороженное с вафельным стаканчиком</h2>
          <input type="text" value="Клубничное мороженное с вафельным стаканчиком" />
          <div>
            <button class="edit" @click.prevent="GoEdit()">
              Редактировать
              <img src="/img/edit.png" alt="No Ethernet" />
            </button>
            <button type="submit" class="save" @click.prevent="GoBehind()">
              Сохранить
              <img src="/img/save.png" alt="No Ethernet" />
            </button>
            <div>
              <input type="text" value="300" />
              <p>300</p>
              р
            </div>
          </div>
          <svg
            width="37"
            height="37"
            viewBox="0 0 37 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9.2487 29.2917C9.2487 30.9875 10.6362 32.375 12.332 32.375H24.6654C26.3612 32.375 27.7487 30.9875 27.7487 29.2917V10.7917H9.2487V29.2917ZM12.332 13.875H24.6654V29.2917H12.332V13.875ZM23.8945 6.16667L2.3529 4.625H14.6445L13.1029 6.16667H7.70703V9.25H29.2904V6.16667H23.8945Z"
              fill="#F93A3A"
            />
          </svg>
        </form> -->
      </div>
    </div>
    <!--right-->
    <div class="recentCustomers">
      <div class="cardHeader">
        <h2>Добавление товара</h2>
      </div>
      <form id="app-cover">
        <div>
          <img :src="img" alt="" />
          <input type="file" v-on:change="handleFileUpload()" ref="file" />
          <p>Выберите файл</p>
        </div>
        <input type="text" placeholder="Введите название" required v-model="title" />
        <input type="text" placeholder="Введите цену" required v-model="price" />
        <select v-model="type" name="" id="">
          <option v-for="type in types" :key="type"  :value="type.id">
            {{ type.type }}
          </option>
        </select>
        <textarea
          cols="30"
          rows="10"
          required
          placeholder="Введите описание"
          v-model="discription"
        ></textarea>
        <textarea
          cols="30"
          rows="10"
          required
          placeholder="Введите состав"
          v-model="structure"
        ></textarea>
        <button v-if="show == false" @click.prevent="createProduct()">Добавить +</button>
        <button v-else>Редактировать +</button>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Loader from "../../Loader.vue";
export default {
  data() {
    return {
      products: [],
      types: [],
      type: 1,
      title: "",
      price: "",
      discription: "",
      structure: "",
      img: "",
      show: false,
      currentItem: null,
      load: true,
      toppings: ["Caramel", "Peanut butter", "Sundae", "Oreos"],
    };
  },
  components: {
    Loader,
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
    time_is_widget.init({ Moscow_z71d: {} });

    this.allProducts();
    this.allTypes();
  },
  methods: {
    allTypes() {
      axios.get("/api/alltypes").then((res) => {
        // console.log(res.data);
        this.types = res.data;
      });
    },
    allProducts() {
      axios.get(`/api/all/products`).then((res) => {
        this.load = false;
        this.products = res.data.content;
      });
    },
    editProduct(id) {
      axios.get(`/api/product/${id}`).then((res) => {
        this.show = true;
        this.img = "";
        this.img = res.data.content.image;
        this.title = res.data.content.title;
        this.price = res.data.content.price;
        this.discription = res.data.content.description;
        this.structure = res.data.content.structure;
      });
    },
    createProduct() {
      let formData = new FormData();
      formData.append("image", this.img);
      formData.append("title", this.title);
      formData.append("price", this.price);
      formData.append("discription", this.discription);
      formData.append("structure", this.structure);
      formData.append("type", this.type);
      axios
        .post("/api/product", formData, {
          headers: {
            "Content-type": "multipart/form-data",
          },
        })
        .then((res) => {
          (this.title = ""),
            (this.price = ""),
            (this.discription = ""),
          this.img = "";
          this.allProducts();
        });
    },
    handleFileUpload() {
      this.img = this.$refs.file.files[0];
    },
    saveEdit() {
      this.show = false;
      this.img = "";
      this.title = "";
      this.price = "";
      this.discription = "";
      this.structure = "";
    },
    GoEdit() {
      document.querySelector(".item-v2").classList.remove("no-edit");
    },
    GoBehind() {
      document.querySelector(".item-v2").classList.add("no-edit");
    },
    deleteProduct(id) {
      axios.delete(`/api/product/${id}`).then((res) => {
        this.allProducts();
      });
    },
  },
  updated() {
    if (
      document
        .querySelector(".recentCustomers form > div:first-child img")
        .getAttribute("src") != ""
    ) {
      document.querySelector(".recentCustomers form > div:first-child p").style.display =
        "none";
      document
        .querySelector(".recentCustomers form input[type='file']")
        .setAttribute("disabled", "");
    } else {
      document.querySelector(".recentCustomers form > div:first-child p").style.display =
        "block";
    }
  },
};
</script>

<style lang="scss" scoped>
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
.h1-top {
  width: 100%;
  text-align: center;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
  margin-bottom: 30px;
}

.details {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: 2fr 1fr;
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
.details .recentOrders > div {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-wrap: wrap;
}

.details .recentOrders .item {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 360px;
  padding: 25px 30px;
  background: #ffffff;
  box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.25);
  border-radius: 8px;
  margin-bottom: 20px;
}
.details .recentOrders .item svg {
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
}
.details .recentOrders .item > div:first-child {
  width: 232px;
  height: 244px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid #ededed;
  border-radius: 25px;
  margin-bottom: 15px;
}
.details .recentOrders .item > div:first-child img {
  width: 55%;
}
.details .recentOrders .item h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
  text-align: center;
  margin-bottom: 25px;
}
.details .recentOrders .item > div:nth-child(3) {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
}
.details .recentOrders .item > div:nth-child(3) button {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 18px 11px;
  background: transparent;
  border: 1px solid #000000;
  border-radius: 7px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
  cursor: pointer;
}
.details .recentOrders .item > div:nth-child(3) button img {
  margin-left: 8px;
}
.details .recentOrders .item > div:nth-child(3) p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 25px;
}

.cardHeader {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 40px;
}

.cardHeader h2 {
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
}

.recentCustomers {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 500px;
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
  background: white;
}
.recentCustomers form {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 85%;
}
.recentCustomers form > div:first-child {
  position: relative;
  width: 232px;
  height: 244px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid #ededed;
  border-radius: 25px;
  margin-bottom: 15px;
}
.recentCustomers form > div:first-child img {
  position: absolute;
  width: 50%;
  z-index: 3;
}
.recentCustomers form input[type="file"] {
  width: 100%;
  height: 100%;
  cursor: pointer;
  opacity: 0;
  background: transparent;
}
.recentCustomers form > div:first-child p {
  position: absolute;
  width: auto;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  color: #9c96a9;
  z-index: 2;
}
.recentCustomers form input[type="text"] {
  width: 100%;
  height: 49px;
  border: 1px solid #000000;
  padding-left: 13px;
  border-radius: 9px;
  outline: none;
  background: transparent;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
  color: black;
  margin-bottom: 15px;
}
.recentCustomers form input[type="text"]::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
  color: #9c96a9;
}
.recentCustomers form textarea {
  resize: none;
  width: 100%;
  height: 98px;
  border: 1px solid #000000;
  padding-left: 13px;
  padding-top: 10px;
  border-radius: 9px;
  outline: none;
  background: transparent;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
  color: black;
  margin-bottom: 15px;
}
.recentCustomers form textarea::placeholder {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
  color: #9c96a9;
}
.recentCustomers form button {
  background: transparent;
  border: 1px solid #000000;
  border-radius: 7px;
  width: 150px;
  height: 50px;
  cursor: pointer;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 17px;
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
