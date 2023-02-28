<template>
  <FirstBlock></FirstBlock>
  <SecondBlock></SecondBlock>
  <TrithBlock></TrithBlock>
  <FourthBlock></FourthBlock>
  <FifthBlock></FifthBlock>
</template>

<script>
import FirstBlock from "./layout/mainpage/FirstBlock.vue";
import SecondBlock from "./layout/mainpage/SecondBlock.vue";
import TrithBlock from "./layout/mainpage/TrithBlock.vue";
import FourthBlock from "./layout/mainpage/FourthBlock.vue";
import FifthBlock from "./layout/mainpage/FifthBlock.vue";
export default {
  setup() {
    return {};
  },
  components: {
    FirstBlock,
    SecondBlock,
    TrithBlock,
    FourthBlock,
    FifthBlock,
  },
};
</script>

<style lang="scss" scoped></style>
