<template>
  <section class="container">
    <firstblock></firstblock>
    <secondblock></secondblock>
    <img class="raindrop" src="/img/raindropdown.png" alt="No Ethernet" />
  </section>
</template>

<script>
import firstblock from "./layout/productpage/firstblock.vue";
import secondblock from "./layout/productpage/secondblock.vue";
export default {
  data() {
    return {};
  },
  components: {
    firstblock,
    secondblock,
  },
};
</script>

<style lang="css" scoped>
section {
  position: relative;
}
.raindrop {
  position: absolute;
  bottom: -212px;
  z-index: -1;
}
</style>
