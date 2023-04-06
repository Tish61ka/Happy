<template>
  <section class="mini-catalog container">
    <div class="txt-div">
      <h1>У нас не бывает</h1>
      <h2>недовольных покупателей</h2>
    </div>
    <p>
      Happy ice-Cream - основан более 20 лет назад. За это время мы открыли более 1000
      точек по всей стране.
    </p>
    <div class="btn-block">
      <router-link :to="{ name: 'Index' }"><button>Перейти к выбору</button></router-link>
      <router-link :to="{ name: 'Index' }"><button>О компании</button></router-link>
    </div>
    <div class="ice-cream-in-mini-catalog">
      <div class="brown-cream">
        <img src="/img/brownicecream.png" alt="No Ethernet" />
        <router-link :to="{ name: 'Index' }"
          ><button>
            <svg
              width="50"
              height="23"
              viewBox="0 0 50 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M49.083 12.0379C49.6562 11.4397 49.636 10.4902 49.0379 9.91702L39.291 0.576295C38.6929 0.00310164 37.7434 0.0233045 37.1702 0.621419C36.597 1.21953 36.6172 2.16907 37.2153 2.74226L45.8792 11.0451L37.5763 19.709C37.0031 20.3071 37.0233 21.2566 37.6214 21.8298C38.2195 22.403 39.1691 22.3828 39.7423 21.7847L49.083 12.0379ZM1.03191 13.4997L48.0319 12.4997L47.9681 9.50034L0.968092 10.5003L1.03191 13.4997Z"
                fill="white"
              />
            </svg></button
        ></router-link>
      </div>
      <div class="yellow-cream">
        <img src="/img/yellowicecream.png" alt="No Ethernet" />
        <router-link :to="{ name: 'Index' }"
          ><button>
            <svg
              width="50"
              height="23"
              viewBox="0 0 50 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M49.083 12.0379C49.6562 11.4397 49.636 10.4902 49.0379 9.91702L39.291 0.576295C38.6929 0.00310164 37.7434 0.0233045 37.1702 0.621419C36.597 1.21953 36.6172 2.16907 37.2153 2.74226L45.8792 11.0451L37.5763 19.709C37.0031 20.3071 37.0233 21.2566 37.6214 21.8298C38.2195 22.403 39.1691 22.3828 39.7423 21.7847L49.083 12.0379ZM1.03191 13.4997L48.0319 12.4997L47.9681 9.50034L0.968092 10.5003L1.03191 13.4997Z"
                fill="white"
              />
            </svg></button
        ></router-link>
      </div>
      <div class="blue-cream">
        <img src="/img/blueicecream.png" alt="No Ethernet" />
        <router-link :to="{ name: 'Index' }"
          ><button>
            <svg
              width="50"
              height="23"
              viewBox="0 0 50 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M49.083 12.0379C49.6562 11.4397 49.636 10.4902 49.0379 9.91702L39.291 0.576295C38.6929 0.00310164 37.7434 0.0233045 37.1702 0.621419C36.597 1.21953 36.6172 2.16907 37.2153 2.74226L45.8792 11.0451L37.5763 19.709C37.0031 20.3071 37.0233 21.2566 37.6214 21.8298C38.2195 22.403 39.1691 22.3828 39.7423 21.7847L49.083 12.0379ZM1.03191 13.4997L48.0319 12.4997L47.9681 9.50034L0.968092 10.5003L1.03191 13.4997Z"
                fill="white"
              />
            </svg></button
        ></router-link>
      </div>
      <div class="pink-cream">
        <img src="/img/pinkicecream.png" alt="No Ethernet" />
        <router-link :to="{ name: 'Index' }"
          ><button>
            <svg
              width="50"
              height="23"
              viewBox="0 0 50 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M49.083 12.0379C49.6562 11.4397 49.636 10.4902 49.0379 9.91702L39.291 0.576295C38.6929 0.00310164 37.7434 0.0233045 37.1702 0.621419C36.597 1.21953 36.6172 2.16907 37.2153 2.74226L45.8792 11.0451L37.5763 19.709C37.0031 20.3071 37.0233 21.2566 37.6214 21.8298C38.2195 22.403 39.1691 22.3828 39.7423 21.7847L49.083 12.0379ZM1.03191 13.4997L48.0319 12.4997L47.9681 9.50034L0.968092 10.5003L1.03191 13.4997Z"
                fill="white"
              />
            </svg></button
        ></router-link>
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
.mini-catalog {
  margin-bottom: 120px;
}
.mini-catalog .txt-div {
  padding-left: 50px;
  border-left: 20px solid #9dcae0;
  margin-bottom: 30px;
}
.mini-catalog .txt-div h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 800;
  font-size: 55px;
  line-height: 76px;
  color: #000000;
}
.mini-catalog .txt-div h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 800;
  font-size: 45px;
  line-height: 64px;
  color: #fcd6e6;
}
.mini-catalog p {
  width: 550px;
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  line-height: 20px;
  color: var(--main-txt-color);
  margin-left: 70px;
  margin-bottom: 40px;
}
.btn-block {
  margin-left: 70px;
}
.btn-block a:nth-child(1) {
  margin-right: 30px;
}
.btn-block a:nth-child(1) button {
  height: 50px;
  background: #fcd6e6;
  border: 1px solid #ababab;
  border-radius: 17px;
  cursor: pointer;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  line-height: 20px;
  padding: 0 15px;
}
.btn-block a:last-child button {
  height: 50px;
  background: transparent;
  border: 1px solid #000000;
  border-radius: 17px;
  cursor: pointer;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  line-height: 20px;
  padding: 0 70px;
}
.ice-cream-in-mini-catalog {
  display: flex;
  flex-direction: row;
}
.brown-cream {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #da9664;
  border: 4px solid #ffffff;
  border-radius: 50px 0px;
  width: 400px;
  height: 440px;
  margin-top: 200px;
  z-index: 10;
}
.brown-cream button {
  position: absolute;
  top: 40%;
  right: -40px;
  width: 80px;
  height: 80px;
  background: #da9664;
  border: 5px solid #ffffff;
  border-radius: 50%;
  cursor: pointer;
}
.yellow-cream {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #f9e65c;
  border: 4px solid #ffffff;
  border-radius: 50px 0px;
  width: 400px;
  height: 440px;
  margin-top: 120px;
  left: -50px;
  z-index: 9;
}
.yellow-cream button {
  position: absolute;
  top: 40%;
  right: -40px;
  width: 80px;
  height: 80px;
  background: #f9e65c;
  border: 5px solid #ffffff;
  border-radius: 50%;
  cursor: pointer;
}
.blue-cream {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #9dcae0;
  border: 4px solid #ffffff;
  border-radius: 50px 0px;
  width: 400px;
  height: 440px;
  margin-top: 30px;
  left: -100px;
  z-index: 8;
}
.blue-cream button {
  position: absolute;
  top: 40%;
  right: -40px;
  width: 80px;
  height: 80px;
  background: #9dcae0;
  border: 5px solid #ffffff;
  border-radius: 50%;
  cursor: pointer;
}
.pink-cream {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: start;
  background: #fcd6e6;
  border: 4px solid #ffffff;
  border-radius: 50px 0px;
  width: 440px;
  height: 600px;
  top: -300px;
  left: -130px;
  z-index: 7;
}
.pink-cream img {
  width: 350px;
  margin-top: -30px;
}
.pink-cream button {
  position: absolute;
  top: 40%;
  right: -40px;
  width: 80px;
  height: 80px;
  background: #fcd6e6;
  border: 5px solid #ffffff;
  border-radius: 50%;
  cursor: pointer;
}
.pink-cream button svg {
  transform: rotate(180deg);
}
@media screen and (min-width: 1200px) and (max-width: 1590px) {
  .mini-catalog {
    margin-bottom: 120px;
  }
  .mini-catalog .txt-div {
    padding-left: 40px;
    border-left: 15px solid #9dcae0;
    margin-bottom: 25px;
  }
  .mini-catalog .txt-div h1 {
    font-size: 54px;
  }
  .mini-catalog .txt-div h2 {
    font-size: 44px;
  }
  .mini-catalog p {
    width: 550px;
    font-size: 18px;
    margin-left: 60px;
    margin-bottom: 35px;
  }
  .btn-block {
    margin-left: 60px;
  }
  .btn-block a:nth-child(1) {
    margin-right: 30px;
  }
  .btn-block a:nth-child(1) button {
    height: 45px;
    font-size: 16px;
    padding: 0 15px;
  }
  .btn-block a:last-child button {
    height: 45px;
    font-size: 16px;
    padding: 0 70px;
  }
}
</style>
