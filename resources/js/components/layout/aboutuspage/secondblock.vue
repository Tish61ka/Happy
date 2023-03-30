<template>
    <section class="about-us-slider">
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
                        <img
                            class="active-big-img"
                            :src="slide[0]"
                            alt="No Ethernet"
                        />
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
        Navigation,
        styleforslider,
    },
    data: () => ({
        currentSlide: 0,
        img: [
            [
                "/img/itemslider1.png",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation",
            ],
            [
                "/img/itemslider2.png",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation",
            ],
            [
                "/img/itemslider3.png",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation",
            ],
            [
                "/img/itemslider4.png",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation",
            ],
            [
                "/img/itemslider5.png",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation",
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
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
}
.carousel__item {
    width: 90%;
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 40px;
}
</style>
