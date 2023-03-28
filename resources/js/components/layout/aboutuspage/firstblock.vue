<template>
  <section class="about-us-info">
    <div class="container main-content">
      <div>
        <img src="/img/aboutus1.png" alt="No Ethernet" />
        <div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation Lorem ipsum dolor sit
            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation
          </p>
        </div>
        <router-link to="/#3"><button>Связаться с нами</button></router-link>
      </div>
      <div>
        <div></div>
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
};
</script>

<style lang="css" scoped>
.about-us-info {
  width: 100vw;
  height: 100vh;
  background-image: url("/img/backLogin.png");
}
</style>