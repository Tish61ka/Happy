<template>
  <section class="about-us-info">
    <div class="container main-content">
      <div>
        <img src="/img/aboutus1.png" alt="No Ethernet" />
        <div>
          <div>
            <p>
              В Happy Ice Cream мы используем только самые качественные ингредиенты, чтобы
              производить наше мороженое, поэтому вы можете быть уверены, что все наши
              продукты произведены с заботой о вашем здоровье и благополучии. Мы также
              следим за тем, чтобы наше производство соответствовало самым высоким
              стандартам качества и гигиены.
            </p>
          </div>
          <router-link to="/#3"><button>Связаться с нами</button></router-link>
        </div>
      </div>
      <div>
        <div>
          <h1>О нас</h1>
          <div>
            <p>
              Happy Ice Cream - это компания, которая представляет коллекцию уникальных
              вкусов мороженого, которые разработаны и произведены с максимальной любовью
              и заботой. Наша миссия - создавать самое лучшее мороженое, чтобы наши
              клиенты могли насладиться вкусом и качеством наших продуктов.
            </p>
          </div>
        </div>
        <img src="/img/aboutus2.png" alt="No Ethernet" />
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {},
};
</script>

<style lang="css" scoped>
.about-us-info {
  width: 100vw;
  height: 100vh;
  min-height: 980px;
  background-image: url("/img/backaboutus.png");
  background-size: cover;
  background-repeat: no-repeat;
}
.main-content {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding-top: 70px;
  height: 100%;
}
.main-content > div {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  height: 100%;
}
.main-content > div img {
  width: 85%;
}
.main-content > div div {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 85%;
}
.main-content > div div div {
  padding: 50px;
  background-color: var(--btn-color);
  border-radius: 19px;
  width: 100%;
  margin-bottom: 40px;
}
.main-content > div:first-child div div {
  margin-top: 100px;
}
.main-content > div:last-child div div {
  margin-top: 50px;
  margin-bottom: 110px;
}
.main-content > div div div p {
  color: #ffffff;
  font-style: normal;
  font-weight: 700;
  font-size: 15px;
  line-height: 167%;
}
.main-content > div:first-child div button {
  width: 270px;
  height: 45px;
  background-color: var(--btn-color);
  border-radius: 12px;
  border: none;
  cursor: pointer;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 15px;
  color: #ffffff;
  /* border: 1px solid var(--second-bg-color); */
}
@media screen and (max-width: 1600px) {
  .main-content > div:last-child div div,
  .main-content > div:first-child div div {
    margin-top: 40px;
    padding: 20px;
  }
  .about-us-info {
    min-height: 840px;
  }
}
@media screen and (max-width: 1450px) {
  .about-us-info {
    min-height: 740px;
  }
  .main-content > div:last-child div div,
  .main-content > div:first-child div div {
    margin-top: 20px;
    padding: 20px;
  }
  .main-content > div:last-child div div {
    margin-top: 10px;
  }
  .main-content > div div {
    width: 90%;
  }
  .main-content > div img {
    width: 90%;
  }
  .main-content > div:last-child div div {
    margin-bottom: 20px;
  }
}
@media screen and (max-width: 1050px) {
  .about-us-info {
    height: auto;
    max-height: none;
  }
  .main-content {
    flex-direction: column-reverse;
    padding: 30px 0;
  }
  .main-content > div:last-child div div,
  .main-content > div:first-child div div {
    padding: 30px;
  }
  .main-content > div:first-child {
    flex-direction: column-reverse;
  }
  .main-content > div div,
  .main-content > div img {
    width: 100%;
  }
  .main-content > div:last-child div div {
    margin-top: 20px;
  }
  .main-content > div:first-child div button {
    display: none;
  }
  .main-content > div div div {
    margin-bottom: 20px;
  }
}

@media screen and (max-width: 450px) {
  .main-content {
    padding: 30px 20px;
  }
  .main-content > div div div p {
    font-size: 14px;
  }
}
</style>
