<template>
  <section class="about-us-slider">
    <img class="left-back" src="/img/backgroundabout1.png" alt="No Ethernet" />
    <img class="right-back" src="/img/backgroundabout2.png" alt="No Ethernet" />
    <h2>Наши партнеры</h2>
    <div class="container">
      <Carousel
        id="gallery"
        :items-to-show="1"
        :wrap-around="false"
        v-model="currentSlide"
      >
        <Slide v-for="slide in img" :key="slide">
          <div class="carousel__item">
            <img class="active-big-img" :src="slide[0]" alt="No Ethernet" />
            <p class="active-p">{{ slide[1] }}</p>
          </div>
        </Slide>
      </Carousel>

      <Carousel
        id="thumbnails"
        :items-to-show="5"
        :wrap-around="true"
        v-model="currentSlide"
        ref="carousel"
      >
        <Slide v-for="(slide, index) in img" :key="slide">
          <div class="carousel__item" @click="slideTo(index)">
            <img width="150" :src="slide[0]" alt="No Ethernet" />
            <!-- {{ index }} -->
          </div>
        </Slide>
      </Carousel>
    </div>
  </section>
</template>

<script>
import { defineComponent } from "vue";
import { Carousel, Slide } from "vue3-carousel";
import styleforslider from "./styleforslider.vue";

import "vue3-carousel/dist/carousel.css";
export default defineComponent({
  name: "Gallery",
  components: {
    Carousel,
    Slide,
    // Navigation,
    styleforslider,
  },
  data: () => ({
    currentSlide: 0,
    img: [
      [
        "/img/itemslider1.png",
        "Nemoloko - компания, которая производит растительные молочные продукты. Название Nemoloko можно перевести с русского языка как безмолочный или немолочный, что отражает основную идею бренда - создание альтернативы молочным продуктам на основе молочных заменителей.",
      ],
      [
        "/img/itemslider2.png",
        "Акконд производит широкий ассортимент продуктов, включая карамель, конфеты, печенье, хлебцы и мармелад. Основным принципом работы компании является использование натуральных ингредиентов, без добавления химических консервантов и красителей.",
      ],
      [
        "/img/itemslider3.png",
        "Nutella - бренд шоколадно-ореховой пасты, который был создан в 1964 году фирмой Ferrero в Пьемонте, Италия. Nutella сделала революцию в мире сладостей, обладая уникальным вкусом и незабываемым ароматом. Она производится из комбинации молотых лесных орехов, какао порошка и молока, с добавлением подсластителей и эмульгаторов.",
      ],
      [
        "/img/itemslider4.png",
        "Большие Исады - завораживающее место, где можно открыть для себя новый мир необычных вкусов и ароматов. Это место, где можно с превеликим удовольствием потратить несколько часов в поисках свежих и сезонных продуктов. Насыщенный аромат свежих фруктов на рынке – это нечто.",
      ],
      [
        "/img/itemslider5.png",
        "Ingeo Bioplactic - компания, являющаяся производителем биоразлагаемых полимеров на основе кукурузного крахмала. Их научные исследования начались более 20 лет назад, а сейчас компания является одним из лидеров в производстве биопластиков.",
      ],
    ],
  }),
  mounted() {
    console.log(this.img);
  },
  methods: {
    slideTo(val) {
      this.currentSlide = val;
    },
  },
});
</script>

<style lang="css" scoped>
.about-us-slider {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 50px;
}
.about-us-slider h2 {
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
}
.carousel__item {
  width: 90%;
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-bottom: 40px;
}
.left-back {
  position: absolute;
  left: 0;
  top: 0px;
  width: 200px;
}
.right-back {
  position: absolute;
  z-index: 1;
  right: 0;
  top: 0;
  width: 200px;
}
</style>
