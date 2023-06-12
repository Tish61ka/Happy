<template>
  <Header
    v-if="
      this.$route.path != '/login' &&
      this.$route.path != '/cart' &&
      this.$route.path != '/order' &&
      this.$route.path != '/admin' &&
      this.$route.path != '/adminhome' &&
      this.$route.path != '/adminusers' &&
      this.$route.path != '/adminreviews' &&
      this.$route.path != '/adminproducts' &&
      this.$route.path != '/adminorders'
    "
  ></Header>
  <main>
    <router-view></router-view>
  </main>
  <Footer
    v-show="
      this.$route.path != '/login' &&
      this.$route.path != '/cart' &&
      this.$route.path != '/order' &&
      this.$route.path != '/admin' &&
      this.$route.path != '/adminhome' &&
      this.$route.path != '/adminusers' &&
      this.$route.path != '/adminreviews' &&
      this.$route.path != '/adminproducts' &&
      this.$route.path != '/adminorders'
    "
  ></Footer>
</template>

<script>
import api from "../api";
import Footer from "./layout/Footer.vue";
import Header from "./layout/Header.vue";

export default {
  name: "Main",
  data() {
    return {};
  },
  mounted() {
    console.log(this.$route.path);
  },
  watch: {
    $route() {
      if (this.$route.path != "/") {
        document.getElementById("footer").style.background = "#D2BEFF";
      } else {
        document.getElementById("footer").style.background = "#D2BEFF";
      }
    },
  },
  components: {
    Header,
    Footer,
  },
};
</script>

<style scoped></style>
