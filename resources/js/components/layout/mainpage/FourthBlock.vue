<template>
  <section class="reviews container">
    <h1>Популярные отзывы</h1>
    <div class="contain-slider">
      <div id="carousel" class="carousel">
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
      </div>
    </div>
  </section>
</template>

<script>
export default {
  setup() {
    return {};
  },
  mounted() {
    /* этот код помечает картинки, для удобства разработки */
    let i = 1;
    for (let li of carousel.querySelectorAll("li")) {
      li.style.position = "relative";
      li.insertAdjacentHTML(
        "beforeend",
        `<span style="position:absolute;left:0;top:0">${i}</span>`
      );
      i++;
    }

    /* конфигурация */
    let width = 450; // ширина картинки
    let count = 3; // видимое количество изображений

    let list = carousel.querySelector("ul");
    let listElems = carousel.querySelectorAll("li");

    let position = 0; // положение ленты прокрутки

    carousel.querySelector(".prev").onclick = function () {
      // сдвиг влево
      position += width * count;
      // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
      position = Math.min(position, 0);
      list.style.marginLeft = position + "px";
    };

    carousel.querySelector(".next").onclick = function () {
      // сдвиг вправо
      position -= width * count;
      // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент
      position = Math.max(position, -width * (listElems.length - count));
      list.style.marginLeft = position + "px";
    };
  },
};
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
.gallery li {
  width: 381px;
  height: 408px;
  background: #ece4fe;
  box-shadow: 0px 0px 6px #ece4fe;
  border-radius: 50px;
  display: block;
  margin-right: 73px;
}

.gallery li > div {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 30px 25px;
}

.gallery li div div {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background-image: url("/img/test.jpg");
  background-size: cover;
  background-position: center;
}

.gallery li div h2 {
  font-family: "Roboto";
  font-style: normal;
  text-align: center;
  font-weight: 700;
  font-size: 20px;
  line-height: 131%;
  margin-top: 10px;
}

.gallery li div p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
  line-height: 131%;
  letter-spacing: 0.14em;
  text-align: center;
  margin-top: 25px;
}

.arrow {
  position: absolute;
  padding: 0;
  background: transparent;
  border-radius: 50%;
  border: 3px solid #000000;
  padding: 27px 20px;
}

.arrow:focus {
  outline: none;
}

.arrow:hover {
  cursor: pointer;
}

.prev {
  left: -100px;
}

.next {
  right: -100px;
  transform: rotate(180deg);
}

.gallery {
  width: 1500px;
  overflow: hidden;
}

.gallery ul {
  width: 3178px;
  font-size: 0;
  transition: margin-left 250ms;
}

.gallery li {
  display: inline-block;
}
</style>
