<template>
  <aside class="filter">
    <h1>Фильтр</h1>
    <div class="cost">
      <h2>Цена, ₽</h2>
      <div class="level-filter level-req">
        <div id="rangeSlider" class="range-slider">
          <div class="range-group">
            <input
              class="range-input"
              :min="min"
              :max="max"
              step="1"
              type="range"
              v-model.number="minPrice"
            />
            <input
              class="range-input"
              :min="min"
              :max="max"
              step="1"
              type="range"
              v-model.number="maxPrice"
            />
          </div>
          <div class="number-group">
            <input
              class="number-input"
              type="number"
              v-model.number="min"
              :min="min"
              :max="max"
            />
            <p>-</p>
            <input
              class="number-input"
              type="number"
              v-model.number="max"
              :min="min"
              :max="max"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="taste">
      <div class="dropdown">
        <div>
          <h2 class="icon">Вкусы</h2>
          <span
            ><svg
              width="22"
              height="12"
              viewBox="0 0 22 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.6055 0L11.8533 1.21777L1.2467 11.5688L-0.00113258 10.351L10.6055 0Z"
                fill="black"
              />
              <path
                d="M9.35763 1.21777L10.6055 0L21.2121 10.351L19.9642 11.5688L9.35763 1.21777Z"
                fill="black"
              />
            </svg>
          </span>
        </div>
        <ul class="menu">
          <li v-for="type in types" :key="type">
            <input
              @click="sort_on.includes(type.type) ? {} : this.sort_on.push(type.type)"
              class="custom-checkbox"
              type="checkbox"
              :id="'color-' + type.id"
              :name="'name-' + type.id"
              value="indigo"
            />
            <label :for="'color-' + type.id">{{ type.type }}</label>
          </li>
        </ul>
      </div>
    </div>
    <div class="wafer">
      <div class="dropdown">
        <div>
          <h2 class="icon">Вафля</h2>
          <span
            ><svg
              width="22"
              height="12"
              viewBox="0 0 22 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.6055 0L11.8533 1.21777L1.2467 11.5688L-0.00113258 10.351L10.6055 0Z"
                fill="black"
              />
              <path
                d="M9.35763 1.21777L10.6055 0L21.2121 10.351L19.9642 11.5688L9.35763 1.21777Z"
                fill="black"
              />
            </svg>
          </span>
        </div>
        <ul class="menu">
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-9"
              name="color-9"
              value="indigo"
            />
            <label for="color-9">Шоколадный рожок</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-10"
              name="color-10"
              value="indigo"
            />
            <label for="color-10">Сахарный рожок</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-11"
              name="color-11"
              value="indigo"
            />
            <label for="color-11">Итальянские вафли</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-12"
              name="color-12"
              value="indigo"
            />
            <label for="color-12">Шведские вафели</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-13"
              name="color-13"
              value="indigo"
            />
            <label for="color-13">Голландские вафли</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-14"
              name="color-14"
              value="indigo"
            />
            <label for="color-14">Австрийские вафли</label>
          </li>
        </ul>
      </div>
    </div>
    <div class="to-construct">
      <p>Не можете выбрать?</p>
      <router-link :to="{ name: 'Construct' }">Создайте свое</router-link>
    </div>
  </aside>
  <section class="catalog-content">
    <p class="pagination">
      <router-link :to="{ name: 'Index' }"> Home </router-link> / Catalog
    </p>
    <h1>Каталог</h1>
    <p class="shown">Показано {{ products.length }}</p>
    <div class="active-filter">
      <div class="filter-1" v-for="sort in sort_on" :key="sort">
        <p>Вкус:</p>
        <p>{{ sort }}</p>
        <svg
          @click="sort_on.splice(index, 1)"
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
      <!-- <div class="filter-1">
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
      </div> -->
      <p class="clear-filter" @click="clear_sort()">Очистить фильтр</p>
      <input type="search" v-model="search" />
    </div>
    <div class="catalog-product all">
      <div v-for="product in products" :key="product" class="card-item">
        <div class="border-img">
          <img :src="product.image" alt="No Ethernet" />
        </div>
        <router-link :to="{ path: '/product/' + product.id }">
          <h3>{{ product.title }}</h3>
        </router-link>
        <div class="bot-flex-card">
          <button v-if="id_user" @click="AddToCart(product.id)">Добавить +</button>
          <div class="flex-cost">
            <p>{{ product.price }}p</p>
            <p>100 g</p>
          </div>
        </div>
      </div>
    </div>
    <div class="catalog-product filtered on-filter">
      <div v-if="filteredList.length == 0 && this.ih == true">
        По вашему запросу ничего не найдено
      </div>
      <div v-else v-for="product in filteredList" :key="product" class="card-item">
        <div class="border-img">
          <img :src="product.image" alt="No Ethernet" />
        </div>
        <router-link :to="{ path: '/product/' + product.id }">
          <h3>{{ product.title }}</h3>
        </router-link>
        <div class="bot-flex-card">
          <button v-if="id_user" @click="AddToCart(product.id)">Добавить +</button>
          <div class="flex-cost">
            <p>{{ product.price }}p</p>
            <p>100 g</p>
          </div>
        </div>
      </div>
    </div>
    <div class="pagination-page">
      <router-link
        v-for="link in pagination.links"
        :key="link"
        :to="
          link.url == null
            ? { name: 'catalog', params: { page: pagination.current_page } }
            : { name: 'catalog', params: { page: link.url } }
        "
        v-html="link.label"
      ></router-link>
    </div>
  </section>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      products: [],
      products_all: [],
      types: [],
      // sort_on: [],
      id_user: localStorage.getItem("id_user"),
      count: 1,
      page: this.$route.params["page"],
      pagination: {},
      load: true,
      minPrice: 0,
      maxPrice: 0,
      min: 0,
      max: 0,
      sort_on: [],
      price: [],
      search: "",
      ih: null,
    };
  },
  mounted() {
    this.getFilms();
    this.alltypes();
    this.AllProducts();
    (function () {
      var parent = document.querySelector("#rangeSlider");
      if (!parent) return;

      var rangeS = parent.querySelectorAll("input[type=range]"),
        numberS = parent.querySelectorAll("input[type=number]");

      rangeS.forEach(function (el) {
        el.oninput = function () {
          var slide1 = parseFloat(rangeS[0].value),
            slide2 = parseFloat(rangeS[1].value);

          if (slide1 > slide2) {
            [slide1, slide2] = [slide2, slide1];
            // var tmp = slide2;
            // slide2 = slide1;
            // slide1 = tmp;
          }

          numberS[0].value = slide1;
          numberS[1].value = slide2;
        };
      });

      numberS.forEach(function (el) {
        el.oninput = function () {
          var number1 = parseFloat(numberS[0].value),
            number2 = parseFloat(numberS[1].value);

          if (number1 > number2) {
            var tmp = number1;
            numberS[0].value = number2;
            numberS[1].value = tmp;
          }

          rangeS[0].value = number1;
          rangeS[1].value = number2;
        };
      });
    })();

    let dropdowndiv = document.querySelectorAll(".dropdown div");
    let dropdown = document.querySelectorAll(".dropdown");
    for (let i = 0; i < dropdown.length; i++) {
      dropdowndiv[i].addEventListener("click", (e) => {
        if (dropdown[i].classList.contains("closed")) {
          dropdown[i].classList.remove("closed");
        } else {
          dropdown[i].classList.add("closed");
        }
      });
    }
  },
  updated() {
    this.ih = document.querySelector(".all").classList.contains("filtered");
  },
  computed: {
    filteredList() {
      let sort = this.sort_on;
      const min_const = this.min;
      const max_const = this.max;
      let min = this.minPrice;
      let max = this.maxPrice;
      let search = this.search;
      return this.products_all.filter(function (elem) {
        let name_product = elem.title;
        name_product = name_product.toLowerCase();
        let result = search.toLocaleLowerCase();
        if (sort == "") {
          if (max_const == max && min_const == min) {
            document.querySelector(".all").classList.remove("filtered");
            document.querySelector(".pagination-page").style.opacity = 1;
            document.querySelector(".pagination-page").style.position = "relative";
            if (search != "") {
              document.querySelector(".all").classList.add("filtered");
              document.querySelector(".pagination-page").style.opacity = 0;
              document.querySelector(".pagination-page").style.position = "absolute";
              return name_product.indexOf(result) > -1;
            }
            document.querySelector(".on-filter").classList.remove("filtered");
            document.querySelector(".pagination-page").style.opacity = 1;
            document.querySelector(".pagination-page").style.position = "relative";
            return false;
          }

          document.querySelector(".all").classList.add("filtered");
          document.querySelector(".pagination-page").style.opacity = 0;
          document.querySelector(".pagination-page").style.position = "absolute";
          return (
            elem.price >= min && elem.price <= max && name_product.indexOf(result) > -1
          );
        } else if (sort != "") {
          document.querySelector(".all").classList.add("filtered");
          document.querySelector(".on-filter").classList.remove("filtered");
          document.querySelector(".pagination-page").style.opacity = 0;
          document.querySelector(".pagination-page").style.position = "absolute";
          return (
            sort.includes(elem.type.type) &&
            elem.price >= min &&
            elem.price <= max &&
            name_product.indexOf(result) > -1
          );
        }
      });
    },
  },
  watch: {
    $route() {
      this.page = this.$route.params.page;
      this.loading = true;
      this.getFilms();
    },
  },
  methods: {
    clear_sort() {
      this.search = "";
      this.minPrice = this.min;
      this.maxPrice = this.max;
      this.sort_on = [];
    },
    AllProducts() {
      axios.get("/api/all/products").then((res) => {
        this.products_all = res.data.content;

        for (let index = 0; index < this.products_all.length; index++) {
          this.price.push(this.products_all[index]["price"]);
        }
        this.minPrice = Math.min.apply(null, this.price);
        this.maxPrice = Math.max.apply(null, this.price);

        this.max = Math.max.apply(null, this.price);
        this.min = Math.min.apply(null, this.price);

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
    getFilms() {
      axios
        .get(`/api/catalog?page=${this.page}`)
        .then((response) => {
          this.products = response.data.products;
          this.pagination = this.changeUrl(response.data.content);
        })
        .finally(() => {
          this.loading = false;
        });
    },
    changeUrl(arr) {
      arr.links.forEach((link) => {
        link.url = this.parseUrl(link);
      });
      return arr;
    },
    parseUrl(link) {
      if (link.url != null) {
        let url = new URL(link.url);
        return url.searchParams.get("page");
      }
      return this.page;
    },
    // Sort() {
    //     for (let index = 0; index < this.products.length; index++) {
    //         let parse = this.products[index].title.split(" ")[0];
    //         console.log(this.sort_on.includes(parse));
    //     }
    // },
    alltypes() {
      axios.get(`/api/alltypes`).then((res) => {
        this.types = res.data;
      });
    },
  },
};
</script>

<style lang="css" scoped>
.filter {
  width: 250px;
}
.filter h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 32px;
  margin-bottom: 40px;
}
.cost {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid #d9d9d9;
  width: 80%;
  margin-bottom: 30px;
}
.cost h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
}
.level-filter {
  width: 100%;
}
.range-slider {
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-bottom: 30px;
}
.catalog-product.filtered {
  opacity: 0;
  position: absolute;
}
.range-slider .number-group {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  font-weight: 300;
  font-size: 13px;
  color: #fff;
}
.range-slider .number-group p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  color: black;
}
.range-slider .number-group .number-input {
  width: 40%;
  height: 35px;
  text-align: center;
  color: black;
  background: rgba(196, 196, 196, 0.3);
  border-radius: 4px;
  outline: none;
  border: 0;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
}
.range-slider .number-group .number-input:first-of-type {
  margin-right: 7px;
}
.range-slider .number-group .number-input:last-of-type {
  margin-left: 7px;
}
.range-slider .number-group .number-input::-webkit-outer-spin-button,
.range-slider .number-group .number-input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.range-slider .number-group .number-input:invalid,
.range-slider .number-group .number-input:out-of-range {
  border: 2px solid red;
}
.range-slider .range-group {
  position: relative;
  flex: 0 0 100%;
  height: 30px;
  margin-bottom: 20px;
}
.range-slider .range-group .range-input {
  position: absolute;
  left: 0;
  bottom: 0;
  margin-bottom: 0;
  appearance: none;
  width: 100%;
  border-bottom: 0;
}
.range-slider .range-group .range-input:focus {
  outline: 0;
}
.range-slider .range-group .range-input::-webkit-slider-runnable-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animation: 0.2s;
  background: #b09cd7;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
.range-slider .range-group .range-input::-webkit-slider-thumb {
  z-index: 2;
  position: relative;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  background: #b09cd7;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -4px;
}
.range-slider .range-group .range-input::-moz-range-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animation: 0.2s;
  background: #3faffa;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
.range-slider .range-group .range-input::-moz-range-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #2497e3;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background: #3faffa;
  cursor: pointer;
}
.range-slider .range-group .range-input::-ms-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animation: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
.range-slider .range-group .range-input::-ms-fill-lower,
.range-slider .range-group .range-input::-ms-fill-upper {
  background: #3faffa;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
.range-slider .range-group .range-input::-ms-thumb {
  z-index: 2;
  position: relative;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background: #3faffa;
  cursor: pointer;
}

/* drop down */
.dropdown {
  transition: all 0.2s ease-in-out;
  overflow: hidden;
  background: transparment;
  border: none;
  width: 100%;
  margin-bottom: 30px;
}
.icon {
  display: flex;
  justify-content: space-around;
}
.menu {
  height: auto;
}
.menu li:first-child {
  padding-top: 20px;
}
.menu li {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  padding-top: 12px;
}
.dropdown.closed .menu {
  height: 0px;
}
.dropdown.closed span svg {
  transform: rotate(180deg);
}
/* close drop down */

.taste {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid #d9d9d9;
  width: 80%;
  margin-bottom: 30px;
}
.taste h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
}
.dropdown div {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  cursor: pointer;
}
/* для элемента input c type="checkbox" */
.custom-checkbox {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.wafer {
  margin-bottom: 30px;
}
.to-construct p {
  margin-bottom: 5px;
}
.to-construct a {
  color: #6a4ba7;
}

/* для элемента label, связанного с .custom-checkbox */
.custom-checkbox + label {
  display: inline-flex;
  align-items: center;
  user-select: none;
  cursor: pointer;
}

/* создание в label псевдоэлемента before со следующими стилями */
.custom-checkbox + label::before {
  content: "";
  display: inline-block;
  width: 1.2em;
  height: 1.2em;
  flex-shrink: 0;
  flex-grow: 0;
  border: 2px solid black;
  border-radius: 0.25em;
  margin-right: 0.5em;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}

/* стили при наведении курсора на checkbox */
.custom-checkbox:not(:disabled):not(:checked) + label:hover::before {
  border-color: #b09cd7;
}

/* стили для активного чекбокса (при нажатии на него) */
.custom-checkbox:not(:disabled):active + label::before {
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}

/* стили для чекбокса, находящегося в фокусе и не находящегося в состоянии checked */
.custom-checkbox:focus:not(:checked) + label::before {
  border-color: #80bdff;
}

/* стили для чекбокса, находящегося в состоянии checked */
.custom-checkbox:checked + label::before {
  border-color: black;
  background-color: #b09cd7;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

/* стили для чекбокса, находящегося в состоянии disabled */
.custom-checkbox:disabled + label::before {
  background-color: #e9ecef;
}

.checkbox {
  margin-bottom: 1em;
}

.wafer {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid #d9d9d9;
  width: 80%;
}
.wafer h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
}
.catalog-content {
  width: 80%;
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
  margin-right: 20px;
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
.pagination-page {
  width: 330px;
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 20px;
  margin: 0 auto;
  margin-bottom: 50px;
}
.pagination-page a:first-child,
.pagination-page a:last-child {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  color: #6a4ba7;
}
.pagination-page a:not(:first-child, :last-child) {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border: 1px solid #000000;
  border-radius: 8px;
  background: transparent;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 22px;
  color: black;
}
.pagination-page a:not(:first-child, :last-child).router-link-active {
  background: #ece4fe;
  border: 1px solid #b09cd7;
}
</style>
