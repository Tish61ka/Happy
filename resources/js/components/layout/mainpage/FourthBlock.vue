<template>
  <section class="reviews container">
    <h1>Популярные отзывы</h1>
    <div class="contain-slider">
      <Carousel :items-to-show="3" :wrap-around="true">
        <Slide v-for="slide in reviews" :key="slide">
          <div class="carousel__item">
            <img :src="getPhoto()" alt="" />
            <h2>{{ slide.name }}</h2>
            <p>
              {{ slide.content }}
            </p>
            <p>
              Отзыв о: <strong>{{ slide.product_id.title }}</strong>
            </p>
          </div>
        </Slide>

        <template #addons>
          <Navigation />
        </template>
      </Carousel>
      <!-- <div id="carousel" class="carousel">
        <button class="arrow prev">
          <svg
            width="41"
            height="24"
            viewBox="0 0 41 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.939339 10.9393C0.353554 11.5251 0.353554 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939339 10.9393ZM41 10.5L2 10.5V13.5L41 13.5V10.5Z"
              fill="black"
            />
          </svg>
        </button>
        <div class="gallery">
          <ul>
            <li>
              <div>
                <div></div>
                <h2>Руслан Кромеев</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation
                </p>
              </div>
            </li>
            <li>
              <div>
                <div></div>
                <h2>Руслан Кромеев</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation
                </p>
              </div>
            </li>
            <li>
              <div>
                <div></div>
                <h2>Руслан Кромеев</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation
                </p>
              </div>
            </li>
            <li>
              <div>
                <div></div>
                <h2>Руслан Кромеев</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation
                </p>
              </div>
            </li>
            <li>
              <div>
                <div></div>
                <h2>Руслан Кромеев</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation
                </p>
              </div>
            </li>
            <li>
              <div>
                <div></div>
                <h2>Руслан Кромеев</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation
                </p>
              </div>
            </li>
            <li>
              <div>
                <div></div>
                <h2>Руслан Кромеев</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  veniam, quis nostrud exercitation
                </p>
              </div>
            </li>
          </ul>
        </div>
        <button class="arrow next">
          <svg
            width="41"
            height="24"
            viewBox="0 0 41 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.939339 10.9393C0.353554 11.5251 0.353554 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939339 10.9393ZM41 10.5L2 10.5V13.5L41 13.5V10.5Z"
              fill="black"
            />
          </svg>
        </button>
      </div> -->
    </div>
  </section>
</template>

<script>
import axios from "axios";
import { defineComponent } from "vue";
import { Carousel, Navigation, Slide } from "vue3-carousel";
// import styleforslider from "./styleforslider.vue";

import "vue3-carousel/dist/carousel.css";
export default defineComponent({
  name: "WrapAround",
  components: {
    Carousel,
    Slide,
    Navigation,
    // styleforslider,
  },
  data() {
    return {
      reviews: [],
      photos: ["/img/strawberryball.png", "/img/bananaball.png", "/img/mintball.png"],
    };
  },
  mounted() {
    this.allReviews();
  },
  methods: {
    allReviews() {
      axios.get("/api/all/reviews").then((res) => {
        this.reviews = res.data.content;
        console.log(this.reviews);
      });
    },
    getPhoto() {
      let i = this.photos.length;
      let index = Math.floor(Math.random() * (i - 0 + 1) + 0);
      console.log(index);
      return this.photos[index];
    },
  },
});
</script>

<style lang="css" scoped>
.reviews {
  position: relative;
  margin-bottom: 100px;
}

.reviews > div {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.reviews h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 54px;
  line-height: 131%;
  display: flex;
  align-items: center;
  letter-spacing: 0.14em;
  margin-bottom: 100px;
}

.carousel {
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 1300px;
}

.carousel__item {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 381px;
  height: 408px;
  padding: 30px 25px;
  background: #ece4fe;
  box-shadow: 0px 0px 6px #ece4fe;
  border-radius: 50px;
  margin-right: 10px;
  margin-left: 10px;
}

.carousel__item div {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  /*background-image: url("/img/test.jpg");*/
  background-size: cover;
  background-position: center;
}

.carousel__item h2 {
  font-family: "Roboto";
  font-style: normal;
  text-align: center;
  font-weight: 700;
  font-size: 20px;
  line-height: 131%;
  margin-top: 10px;
}

.carousel__item p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  line-height: 131%;
  letter-spacing: 0.14em;
  text-align: center;
  margin-top: 25px;
}

.gallery li {
  display: inline-block;
}
@media screen and (min-width: 1200px) and (max-width: 1590px) {
  .reviews {
    position: relative;
    margin-bottom: 100px;
  }
  .reviews h1 {
    font-size: 40px;
    margin-bottom: 50px;
  }

  .carousel {
    width: 1000px;
  }
  .carousel__item {
    width: 306px;
    height: 327px;
    padding: 20px 20px;
  }

  .carousel__item div {
    width: 85px;
    height: 85px;
  }

  .carousel__item h2 {
    font-size: 18px;
    margin-top: 10px;
  }

  .carousel__item p {
    font-size: 16px;
    margin-top: 20px;
  }
}
</style>
