<template></template>

<script>
export default {
  data() {
    return {};
  },
};
</script>

<style lang="css">
/* .carousel__slide--active {
    background-color: aqua;
} */
.carousel__track li {
  width: 140px;
}
.active-big-img {
  width: 370px;
  height: 400px;
}
.active-p {
  width: 50%;
  margin-left: 100px;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 131%;
  text-align: left;
}
@media screen and (max-width: 1050px) {
  .carousel:last-child .carousel__viewport {
    display: none;
  }
}
@media screen and (max-width: 650px) {
  .carousel__item {
    justify-content: center;
  }
}
</style>
