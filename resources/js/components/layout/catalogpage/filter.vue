<template>
  <aside class="filter">
    <h1>Фильтр</h1>
    <div class="cost">
      <h2>Цена, ₽</h2>
      <div class="level-filter level-req">
        <div id="rangeSlider" class="range-slider">
          <div class="range-group">
            <input
              class="range-input"
              value="0"
              min="1"
              max="600"
              step="1"
              type="range"
            />
            <input
              class="range-input"
              value="600"
              min="1"
              max="600"
              step="1"
              type="range"
            />
          </div>
          <div class="number-group">
            <input class="number-input" type="number" value="0" min="0" max="600" />
            <p>-</p>
            <input class="number-input" type="number" value="600" min="0" max="600" />
          </div>
        </div>
      </div>
    </div>
    <div class="taste">
      <div class="dropdown">
        <div>
          <h2 class="icon">Вкусы</h2>
          <span
            ><svg
              width="22"
              height="12"
              viewBox="0 0 22 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.6055 0L11.8533 1.21777L1.2467 11.5688L-0.00113258 10.351L10.6055 0Z"
                fill="black"
              />
              <path
                d="M9.35763 1.21777L10.6055 0L21.2121 10.351L19.9642 11.5688L9.35763 1.21777Z"
                fill="black"
              />
            </svg>
          </span>
        </div>
        <ul class="menu">
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-1"
              name="color-1"
              value="indigo"
            />
            <label for="color-1">Клубничное</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-2"
              name="color-2"
              value="indigo"
            />
            <label for="color-2">Фисташковое</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-3"
              name="color-3"
              value="indigo"
            />
            <label for="color-3">Ванильное</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-4"
              name="color-4"
              value="indigo"
            />
            <label for="color-4">Шоколадное</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-5"
              name="color-5"
              value="indigo"
            />
            <label for="color-5">Банановое</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-6"
              name="color-6"
              value="indigo"
            />
            <label for="color-6">Мятное</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-7"
              name="color-7"
              value="indigo"
            />
            <label for="color-7">Карамельное</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-8"
              name="color-8"
              value="indigo"
            />
            <label for="color-8">Шоколадное</label>
          </li>
        </ul>
      </div>
    </div>
    <div class="wafer">
      <div class="dropdown">
        <div>
          <h2 class="icon">Вафля</h2>
          <span
            ><svg
              width="22"
              height="12"
              viewBox="0 0 22 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.6055 0L11.8533 1.21777L1.2467 11.5688L-0.00113258 10.351L10.6055 0Z"
                fill="black"
              />
              <path
                d="M9.35763 1.21777L10.6055 0L21.2121 10.351L19.9642 11.5688L9.35763 1.21777Z"
                fill="black"
              />
            </svg>
          </span>
        </div>
        <ul class="menu">
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-9"
              name="color-9"
              value="indigo"
            />
            <label for="color-9">Шоколадный рожок</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-10"
              name="color-10"
              value="indigo"
            />
            <label for="color-10">Сахарный рожок</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-11"
              name="color-11"
              value="indigo"
            />
            <label for="color-11">Итальянские вафли</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-12"
              name="color-12"
              value="indigo"
            />
            <label for="color-12">Шведские вафели</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-13"
              name="color-13"
              value="indigo"
            />
            <label for="color-13">Голландские вафли</label>
          </li>
          <li>
            <input
              class="custom-checkbox"
              type="checkbox"
              id="color-14"
              name="color-14"
              value="indigo"
            />
            <label for="color-14">Австрийские вафли</label>
          </li>
        </ul>
      </div>
    </div>
  </aside>
</template>

<script>
export default {
  data() {
    return {
      load: true,
    };
  },
  mounted() {
    (function () {
      var parent = document.querySelector("#rangeSlider");
      if (!parent) return;

      var rangeS = parent.querySelectorAll("input[type=range]"),
        numberS = parent.querySelectorAll("input[type=number]");

      rangeS.forEach(function (el) {
        el.oninput = function () {
          var slide1 = parseFloat(rangeS[0].value),
            slide2 = parseFloat(rangeS[1].value);

          if (slide1 > slide2) {
            [slide1, slide2] = [slide2, slide1];
            // var tmp = slide2;
            // slide2 = slide1;
            // slide1 = tmp;
          }

          numberS[0].value = slide1;
          numberS[1].value = slide2;
        };
      });

      numberS.forEach(function (el) {
        el.oninput = function () {
          var number1 = parseFloat(numberS[0].value),
            number2 = parseFloat(numberS[1].value);

          if (number1 > number2) {
            var tmp = number1;
            numberS[0].value = number2;
            numberS[1].value = tmp;
          }

          rangeS[0].value = number1;
          rangeS[1].value = number2;
        };
      });
    })();

    let dropdowndiv = document.querySelectorAll(".dropdown div");
    let dropdown = document.querySelectorAll(".dropdown");
    for (let i = 0; i < dropdown.length; i++) {
      dropdowndiv[i].addEventListener("click", (e) => {
        if (dropdown[i].classList.contains("closed")) {
          dropdown[i].classList.remove("closed");
        } else {
          dropdown[i].classList.add("closed");
        }
      });
    }
  },
};
</script>

<style lang="css" scoped>
.filter {
  width: 250px;
}
.filter h1 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 32px;
  margin-bottom: 40px;
}
.cost {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid #d9d9d9;
  width: 80%;
  margin-bottom: 30px;
}
.cost h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
}
.level-filter {
  width: 100%;
}
.range-slider {
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-bottom: 30px;
}
.range-slider .number-group {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  font-weight: 300;
  font-size: 13px;
  color: #fff;
}
.range-slider .number-group p {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  color: black;
}
.range-slider .number-group .number-input {
  width: 40%;
  height: 35px;
  text-align: center;
  color: black;
  background: rgba(196, 196, 196, 0.3);
  border-radius: 4px;
  outline: none;
  border: 0;
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
}
.range-slider .number-group .number-input:first-of-type {
  margin-right: 7px;
}
.range-slider .number-group .number-input:last-of-type {
  margin-left: 7px;
}
.range-slider .number-group .number-input::-webkit-outer-spin-button,
.range-slider .number-group .number-input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}
.range-slider .number-group .number-input:invalid,
.range-slider .number-group .number-input:out-of-range {
  border: 2px solid red;
}
.range-slider .range-group {
  position: relative;
  flex: 0 0 100%;
  height: 30px;
  margin-bottom: 20px;
}
.range-slider .range-group .range-input {
  position: absolute;
  left: 0;
  bottom: 0;
  margin-bottom: 0;
  appearance: none;
  width: 100%;
  border-bottom: 0;
}
.range-slider .range-group .range-input:focus {
  outline: 0;
}
.range-slider .range-group .range-input::-webkit-slider-runnable-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animation: 0.2s;
  background: #b09cd7;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
.range-slider .range-group .range-input::-webkit-slider-thumb {
  z-index: 2;
  position: relative;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  background: #b09cd7;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -4px;
}
.range-slider .range-group .range-input::-moz-range-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animation: 0.2s;
  background: #3faffa;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
.range-slider .range-group .range-input::-moz-range-thumb {
  z-index: 2;
  position: relative;
  box-shadow: 0px 0px 0px #000;
  border: 1px solid #2497e3;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background: #3faffa;
  cursor: pointer;
}
.range-slider .range-group .range-input::-ms-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animation: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
.range-slider .range-group .range-input::-ms-fill-lower,
.range-slider .range-group .range-input::-ms-fill-upper {
  background: #3faffa;
  border-radius: 1px;
  box-shadow: none;
  border: 0;
}
.range-slider .range-group .range-input::-ms-thumb {
  z-index: 2;
  position: relative;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background: #3faffa;
  cursor: pointer;
}

/* drop down */
.dropdown {
  transition: all 0.2s ease-in-out;
  overflow: hidden;
  background: transparment;
  border: none;
  width: 100%;
  margin-bottom: 30px;
}
.icon {
  display: flex;
  justify-content: space-around;
}
.menu {
  height: auto;
}
.menu li:first-child {
  padding-top: 20px;
}
.menu li {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  padding-top: 12px;
}
.dropdown.closed .menu {
  height: 0px;
}
.dropdown.closed span svg {
  transform: rotate(180deg);
}
/* close drop down */

.taste {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid #d9d9d9;
  width: 80%;
  margin-bottom: 30px;
}
.taste h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
}
.dropdown div {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  cursor: pointer;
}
/* для элемента input c type="checkbox" */
.custom-checkbox {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

/* для элемента label, связанного с .custom-checkbox */
.custom-checkbox + label {
  display: inline-flex;
  align-items: center;
  user-select: none;
  cursor: pointer;
}

/* создание в label псевдоэлемента before со следующими стилями */
.custom-checkbox + label::before {
  content: "";
  display: inline-block;
  width: 1.2em;
  height: 1.2em;
  flex-shrink: 0;
  flex-grow: 0;
  border: 2px solid black;
  border-radius: 0.25em;
  margin-right: 0.5em;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}

/* стили при наведении курсора на checkbox */
.custom-checkbox:not(:disabled):not(:checked) + label:hover::before {
  border-color: #b09cd7;
}

/* стили для активного чекбокса (при нажатии на него) */
.custom-checkbox:not(:disabled):active + label::before {
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}

/* стили для чекбокса, находящегося в фокусе и не находящегося в состоянии checked */
.custom-checkbox:focus:not(:checked) + label::before {
  border-color: #80bdff;
}

/* стили для чекбокса, находящегося в состоянии checked */
.custom-checkbox:checked + label::before {
  border-color: black;
  background-color: #b09cd7;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

/* стили для чекбокса, находящегося в состоянии disabled */
.custom-checkbox:disabled + label::before {
  background-color: #e9ecef;
}

.checkbox {
  margin-bottom: 1em;
}

.wafer {
  display: flex;
  flex-direction: column;
  border-bottom: 1px solid #d9d9d9;
  width: 80%;
}
.wafer h2 {
  font-family: "Roboto";
  font-style: normal;
  font-weight: 700;
  font-size: 21px;
}
</style>
