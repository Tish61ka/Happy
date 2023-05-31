<template>
  <div class="container content-construct">
    <aside class="choise">
      <h1>Ингридиетны</h1>
      <div class="taste-create">
        <h2>Вкусы</h2>
        <div>
          <div class="item-clicking" v-for="(taste, index) in taste_arr" :key="index">
            <p>{{ taste.name }}</p>
            <button @click.prevent="PlusTaste(index, taste.name)">+</button>
            <div>{{ taste.count }}</div>
            <button @click.prevent="MinusTaste(index, taste.name)">-</button>
          </div>
        </div>
      </div>
      <div class="wafer-create">
        <h2>Рожки</h2>
        <div>
          <div class="item-clicking" v-for="(wafer, i) in wafer_arr" :key="i">
            <p>{{ wafer.name }}</p>
            <button @click.prevent="PlusWafer(i, wafer.name)">+</button>
            <div>{{ wafer.count }}</div>
            <button @click.prevent="MinusWafer(i, wafer.name)">-</button>
          </div>
        </div>
      </div>
    </aside>
    <section class="main-content">
      <p class="pagination">
        <router-link :to="{ name: 'Index' }"> Home </router-link> /
        <router-link :to="{ name: 'Catalog' }"> Catalog </router-link>/ Constructor
      </p>
      <div class="h1-danger">
        <h1>Создай свое мороженное</h1>
        <div v-if="showDanger == true" class="danger">
          <p>{{ messageDanger }}</p>
        </div>
      </div>

      <div class="created-ice-cream">
        <div class="field">
          <div>
            <img
              v-for="tasteball in tasteBallArr"
              :key="tasteball"
              :src="tasteball"
              alt="No Ethernet"
            />
          </div>
          <img
            v-for="waferball in waferArr"
            :key="waferball"
            :src="waferball"
            alt="No Ethernet"
          />
        </div>
        <button>Добавить в корзину</button>
      </div>
      <img :src="image" alt="" />
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      taste_arr: [],
      wafer_arr: [],
      tasteBallArr: [],
      waferArr: [],
      showDanger: false,
      messageDanger: "",
      childWafer: "",
      image: "",
    };
  },
  mounted() {
    // console.log();
    this.taste_arr = this.tasteFunc();
    this.wafer_arr = this.waferFunc();
  },
  methods: {
    tasteFunc() {
      let taste = [
        {
          name: "Клубничное",
          count: 0,
        },
        {
          name: "Фисташковое",
          count: 0,
        },
        {
          name: "Ванильное",
          count: 0,
        },
        {
          name: "Шоколадное",
          count: 0,
        },
        {
          name: "Банановое",
          count: 0,
        },
        {
          name: "Мятное",
          count: 0,
        },
        {
          name: "Карамельное",
          count: 0,
        },
        {
          name: "Ореховое",
          count: 0,
        },
      ];
      return taste;
    },
    waferFunc() {
      let wafer = [
        {
          name: "Ванильный",
          count: 0,
        },
        {
          name: "Шоколадный",
          count: 0,
        },
      ];
      return wafer;
    },
    PlusTaste(index, id) {
      let id_taste = id;
      if (this.waferArr.length > 0) {
        if (this.tasteBallArr.length <= 2) {
          switch (id_taste) {
            case "Клубничное":
              this.tasteBallArr.push("/img/strawberryball.png");
              // let img = document.createElement("img");
              // img.src = "/img/strawberryball.png";
              // let src = document.querySelector("section");
              // src.appendChild(img);
              this.taste_arr[index].count++;
              break;
            case "Фисташковое":
              this.tasteBallArr.push("/img/pistachioball.png");
              this.taste_arr[index].count++;
              break;
            case "Ванильное":
              this.tasteBallArr.push("/img/vanilball.png");
              this.taste_arr[index].count++;
              break;
            case "Шоколадное":
              this.tasteBallArr.push("/img/chocolateball.png");
              this.taste_arr[index].count++;
              break;
            case "Банановое":
              this.tasteBallArr.push("/img/bananaball.png");
              this.taste_arr[index].count++;
              break;
            case "Мятное":
              this.tasteBallArr.push("/img/mintball.png");
              this.taste_arr[index].count++;
              break;
            case "Карамельное":
              this.tasteBallArr.push("/img/caramelball.png");
              this.taste_arr[index].count++;
              break;
            case "Ореховое":
              this.tasteBallArr.push("/img/nutsball.png");
              this.taste_arr[index].count++;
              break;
            default:
              break;
          }

          console.log(this.tasteBallArr);
        } else {
          this.messageDanger = "Нельзя добавить больше 3-х шариков";
          this.showDanger = true;
          setTimeout(() => {
            this.showDanger = false;
          }, 3500);
        }
      } else {
        this.messageDanger = "Не выбран рожок";
        this.showDanger = true;
        setTimeout(() => {
          this.showDanger = false;
        }, 3500);
      }
    },
    MinusTaste(index, id) {
      let id_taste = id;
      if (this.tasteBallArr.length >= 1) {
        switch (id_taste) {
          case "Клубничное":
            let del = this.tasteBallArr.indexOf("/img/strawberryball.png");
            if (del > -1) {
              this.tasteBallArr.splice(del, 1);
              this.taste_arr[index].count--;
            }
            break;
          case "Фисташковое":
            let del1 = this.tasteBallArr.indexOf("/img/pistachioball.png");
            if (del1 > -1) {
              this.tasteBallArr.splice(del1, 1);
              this.taste_arr[index].count--;
            }
            break;
          case "Ванильное":
            let del2 = this.tasteBallArr.indexOf("/img/vanilball.png");
            if (del2 > -1) {
              this.tasteBallArr.splice(del2, 1);
              this.taste_arr[index].count--;
            }
            break;
          case "Шоколадное":
            let del3 = this.tasteBallArr.indexOf("/img/chocolateball.png");
            if (del3 > -1) {
              this.tasteBallArr.splice(del3, 1);
              this.taste_arr[index].count--;
            }
            break;
          case "Банановое":
            let del4 = this.tasteBallArr.indexOf("/img/bananaball.png");
            if (del4 > -1) {
              this.tasteBallArr.splice(del4, 1);
              this.taste_arr[index].count--;
            }
            break;
          case "Мятное":
            let del5 = this.tasteBallArr.indexOf("/img/mintball.png");
            if (del5 > -1) {
              this.tasteBallArr.splice(del5, 1);
              this.taste_arr[index].count--;
            }
            break;
          case "Карамельное":
            let del6 = this.tasteBallArr.indexOf("/img/caramelball.png");
            if (del6 > -1) {
              this.tasteBallArr.splice(del6, 1);
              this.taste_arr[index].count--;
            }
            break;
          case "Ореховое":
            let del7 = this.tasteBallArr.indexOf("/img/nutsball.png");
            if (del7 > -1) {
              this.tasteBallArr.splice(del7, 1);
              this.taste_arr[index].count--;
            }
            break;
          default:
            break;
        }

        console.log(this.tasteBallArr);
      } else {
        this.messageDanger = "Количество шариков достигло минимума";
        this.showDanger = true;
        setTimeout(() => {
          this.showDanger = false;
        }, 3500);
      }
    },
    PlusWafer(index, id) {
      let id_wafer = id;
      if (this.waferArr.length <= 0) {
        switch (id_wafer) {
          case "Ванильный":
            this.waferArr.push("/img/vanilwafer.png");
            // let img = document.createElement("img");
            // img.src = "/img/strawberryball.png";
            // let src = document.querySelector("section");
            // src.appendChild(img);
            this.wafer_arr[index].count++;
            break;
          case "Шоколадный":
            this.waferArr.push("/img/chocolatewafer.png");
            this.wafer_arr[index].count++;
            break;
          default:
            break;
        }

        console.log(this.waferArr);
      } else {
        this.messageDanger = "Нельзя добавить больше одного рожка";
        this.showDanger = true;
        setTimeout(() => {
          this.showDanger = false;
        }, 3500);
      }
    },
    MinusWafer(index, id) {
      let id_wafer = id;
      if (this.tasteBallArr.length == 0) {
        if (this.waferArr.length > 0) {
          switch (id_wafer) {
            case "Ванильный":
              let del = this.waferArr.indexOf("/img/vanilwafer.png");
              if (del > -1) {
                this.waferArr.splice(del, 1);
                this.wafer_arr[index].count--;
              }
              break;
            case "Шоколадный":
              let del1 = this.waferArr.indexOf("/img/chocolatewafer.png");
              if (del1 > -1) {
                this.waferArr.splice(del1, 1);
                this.wafer_arr[index].count--;
              }
              break;
            default:
              break;
          }

          console.log(this.waferArr);
        } else {
          this.messageDanger = "Количество рожков достигло минимума";
          this.showDanger = true;
          setTimeout(() => {
            this.showDanger = false;
          }, 3500);
        }
      } else {
        this.messageDanger = "Нельзя убрать рожок, пока есть шарики";
        this.showDanger = true;
        setTimeout(() => {
          this.showDanger = false;
        }, 3500);
      }
    },
  },
  updated() {
    // if (document.querySelector(".created-ice-cream > div div").childNodes.length == 2) {
    //   document.querySelector(
    //     ".created-ice-cream > div div img:first-child"
    //   ).style.marginRight = -17 + "px";
    // }
    // this.childWafer = document.querySelector(".field").childElementCount;
    // if (this.childWafer > 1)
    // console.log(document.querySelector(".field> img").getAttribute("src"));
    // function mergeImages() {
    //   const img1 = new Image();
    //   const img2 = new Image();
    //   const img3 = new Image();
    //   const img4 = new Image();
    //   const canvas = document.createElement("canvas");
    //   const ctx = canvas.getContext("2d");
    //   img1.onload = function () {
    //     canvas.width = img1.width * 2;
    //     canvas.height = img1.height * 2;
    //     ctx.drawImage(img1, 0, 0);
    //     img2.onload = function () {
    //       ctx.drawImage(img2, img1.width, 0);
    //       img3.onload = function () {
    //         ctx.drawImage(img3, 0, img1.height);
    //         img4.onload = function () {
    //           ctx.drawImage(img4, img1.width, img1.height);
    //           const mergedImage = canvas.toDataURL("image/png");
    //           this.image = mergedImage;
    //         };
    //         if (this.childWafer <= 1) {
    //         } else {
    //           img4.src = document.querySelector(".field> img").getAttribute("src");
    //         }
    //       };
    //       if (this.childWafer <= 1) {
    //       } else {
    //         img3.src = document.querySelector(".field> img").getAttribute("src");
    //       }
    //     };
    //     if (this.childWafer <= 1) {
    //     } else {
    //       img2.src = document.querySelector(".field> img").getAttribute("src");
    //     }
    //   };
    //   if (this.childWafer <= 1) {
    //   } else {
    //     img1.src = document.querySelector(".field> img").getAttribute("src");
    //   }
    // }
    // mergeImages();
  },
};
</script>

<style lang="css" scoped>
.content-construct {
  display: flex;
  flex-direction: row;
}
.choise {
  width: 250px;
}
.choise h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 30px;
  margin-bottom: 35px;
}
.choise h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  margin-bottom: 30px;
}
.choise > div {
  width: 80%;
}
.choise > div > div {
  border-bottom: 1px solid #d9d9d9;
  margin-bottom: 20px;
}
.item-clicking {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-bottom: 20px;
}
.item-clicking p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  margin-right: 10px;
}
.item-clicking button {
  border: none;
  background: transparent;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 32px;
  margin-right: 10px;
  cursor: pointer;
}
.item-clicking button:last-child {
  margin-left: 10px;
  margin-top: -2px;
}
.item-clicking div {
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 8px;
  padding: 6px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
}

.main-content {
  margin-top: 7px;
}
.pagination,
.pagination a {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  color: #bfbfbf;
  margin-bottom: 30px;
  margin-left: 2px;
}
.main-content {
  width: 80%;
  margin-left: 130px;
}
.h1-danger {
  width: 1056px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}
.main-content h1 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 36px;
}
.danger {
  display: inline-block;
  padding: 8px 10px;
  background: rgba(249, 58, 58, 0.5);
  border-radius: 8px;
}
.danger p {
  font-size: 18px;
  color: white;
}
.created-ice-cream {
  position: relative;
  width: 1056px;
  height: 726px;
  background: #ffffff;
  box-shadow: 0px 0px 27px rgba(0, 0, 0, 0.25);
  border-radius: 57px;
  margin-top: 50px;
  margin-bottom: 50px;
}
.created-ice-cream > div {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  width: 100%;
  height: 85%;
}
.created-ice-cream > div > img {
  position: relative;
  z-index: 5;
}
.created-ice-cream > div div {
  display: flex;
  flex-wrap: wrap-reverse;
  justify-content: center;
  align-items: center;
  margin-bottom: -30px;
  width: 290px;
}
.created-ice-cream > div div img {
  position: relative;
  width: 150px;
  height: 150px;
  z-index: 1;
}
.created-ice-cream > div div img:nth-child(2) {
  z-index: 2;
  margin-left: -17px;
}
.created-ice-cream > div div img:nth-child(3) {
  z-index: 0;
  margin-bottom: -62px;
}
.created-ice-cream button {
  position: absolute;
  bottom: 20px;
  width: 300px;
  height: 50px;
  background: #b09cd7;
  border-radius: 17px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  border: none;
  color: white;
  transform: translate(125%, 0%);
  cursor: pointer;
}
</style>
