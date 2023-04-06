<template>
  <section class="preview">
    <div class="container content-in-review">
      <div>
        <h1>American</h1>
        <h2>ice cream</h2>
        <router-link :to="{ name: 'Index' }"
          ><button>Перейти к выбору</button></router-link
        >
      </div>
      <div>
        <img src="/img/AccentImg.png" alt="No Ethernet" />
      </div>
    </div>
  </section>
</template>

<script>
export default {
  setup() {
    return {};
  },
};
</script>

<style lang="css" scoped>
.preview {
  position: relative;
  height: 640px;
  width: 100vw;
  background-image: url("/img/backMain.png");
  background-size: cover;
  background-repeat: no-repeat;
  margin-bottom: 150px;
}
.content-in-review {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.content-in-review div:first-child {
  margin-top: 100px;
}
.content-in-review div h1 {
  width: 600px;
  font-family: "Clicker Script";
  font-style: normal;
  font-weight: 400;
  font-size: 200px;
  line-height: 44%;
  /* -webkit-text-stroke: 1px #BDAAE3;*/
  color: white;
  text-align: center;
}
.content-in-review div h2 {
  width: 600px;
  font-family: "Clicker Script";
  font-style: normal;
  font-weight: 400;
  font-size: 126px;
  line-height: 44%;
  color: white;
  text-align: center;
  margin-top: 50px;
}
.content-in-review div button {
  width: 420px;
  height: 70px;
  background: #9dcae0;
  border: 5px solid #bdaae3;
  border-radius: 28px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
  line-height: 9px;
  color: #ffffff;
  cursor: pointer;
  margin-top: 60px;
  margin-left: 90px;
}
.content-in-review div:last-child img {
  width: 1000px;
  height: 1000px;
  margin-top: -150px;
  margin-left: 100px;
}
@media screen and (min-width: 1200px) and (max-width: 1590px) {
  .preview {
    height: 480px;
    width: 100vw;
    margin-bottom: 50px;
  }
  .content-in-review div h1 {
    width: 460px;
    font-size: 150px;
  }
  .content-in-review div h2 {
    width: 460px;
    font-size: 100px;
    margin-top: 40px;
  }
  .content-in-review div button {
    width: 350px;
    height: 60px;
    font-size: 18px;
    margin-top: 40px;
    margin-left: 60px;
  }
  .content-in-review div:last-child img {
    width: 800px;
    height: 700px;
    margin-top: -100px;
  }
}
</style>
