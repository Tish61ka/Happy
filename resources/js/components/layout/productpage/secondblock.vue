<template>
  <div class="container reviews-form">
    <div>
      <h1>Оставить отзыв о товаре:</h1>
      <div>
        <input type="text" placeholder="Введите имя" v-model="name" required />
        <textarea
          cols="30"
          rows="10"
          placeholder="Введите комментарий"
          required
          v-model="content"
        ></textarea>
        <button type="submit" @click="createReview()">Отправить</button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      name: "",
      content: "",
      id_product: window.location.pathname.split("/")[2],
    };
  },
  mounted() {},
  methods: {
    createReview() {
      axios
        .post("/api/create/review", {
          name: this.name,
          content: this.content,
          id_product: this.id_product,
        })
        .then((res) => {
          this.name = "";
          this.content = "";
        });
    },
  },
};
</script>

<style lang="css">
.reviews-form {
  position: relative;
  top: -50px;
  margin-bottom: 50px;
}
.reviews-form > div {
  width: 732px;
  border: 4px solid #b09cd7;
  border-radius: 32px;
  background: transparent;
  padding: 30px 35px;
  margin-left: 140px;
}
.reviews-form > div h1 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
}
.reviews-form > div > div {
  display: flex;
  flex-direction: column;
  margin-top: 30px;
}
.reviews-form > div > div input {
  width: 100%;
  height: 55px;
  margin-bottom: 20px;
  border: 2px solid #b09cd7;
  border-radius: 15px;
  padding-left: 20px;
  outline: none;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  color: black;
}
.reviews-form > div > div input::placeholder,
.reviews-form > div > div textarea::placeholder {
  color: #7a7474;
}
.reviews-form > div > div textarea {
  width: 100%;
  height: 115px;
  border: 2px solid #b09cd7;
  border-radius: 15px;
  padding-top: 15px;
  padding-left: 20px;
  outline: none;
  resize: none;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  color: black;
  margin-bottom: 20px;
}
.reviews-form > div > div button {
  width: 182px;
  height: 55px;
  border: 2px solid #b09cd7;
  border-radius: 15px;
  cursor: pointer;
  background: transparent;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
}
</style>
