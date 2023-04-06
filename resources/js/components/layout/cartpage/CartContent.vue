<template>
  <div class="topbar">
    <div class="toggle">
      <svg
        width="38"
        height="24"
        viewBox="0 0 38 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <rect width="38" height="5" rx="2.5" fill="black" />
        <rect y="19" width="38" height="5" rx="2.5" fill="black" />
        <rect y="9" width="38" height="5" rx="2.5" fill="black" />
      </svg>
    </div>
  </div>
  <h1 class="h1">Корзина</h1>
  <!--Bot-->
  <div class="details">
    <div class="recentOrders">
      <table>
        <thead>
          <tr>
            <td>Фото</td>
            <td>Название</td>
            <td>Количество</td>
            <td>Стоимость</td>
            <td>Действия</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="img-td">
              <div>
                <img src="/img/caramel.png" alt="No Ethernet" />
              </div>
            </td>
            <td>Карамельное мороженное</td>
            <td class="count-td">
              <div>
                <button>+</button>
                <p>1</p>
                <button>-</button>
              </div>
            </td>
            <td>330</td>
            <td class="btn-td">
              <button>Убрать</button>
            </td>
          </tr>
          <tr>
            <td class="img-td">
              <div>
                <img src="/img/caramel.png" alt="No Ethernet" />
              </div>
            </td>
            <td>Карамельное мороженное</td>
            <td class="count-td">
              <div>
                <button>+</button>
                <p>1</p>
                <button>-</button>
              </div>
            </td>
            <td>330</td>
            <td class="btn-td">
              <button>Убрать</button>
            </td>
          </tr>
          <tr>
            <td class="img-td">
              <div>
                <img src="/img/caramel.png" alt="No Ethernet" />
              </div>
            </td>
            <td>Карамельное мороженное</td>
            <td class="count-td">
              <div>
                <button>+</button>
                <p>1</p>
                <button>-</button>
              </div>
            </td>
            <td>330</td>
            <td class="btn-td">
              <button>Убрать</button>
            </td>
          </tr>
          <tr>
            <td class="img-td">
              <div>
                <img src="/img/caramel.png" alt="No Ethernet" />
              </div>
            </td>
            <td>Карамельное мороженное</td>
            <td class="count-td">
              <div>
                <button>+</button>
                <p>1</p>
                <button>-</button>
              </div>
            </td>
            <td>330</td>
            <td class="btn-td">
              <button>Убрать</button>
            </td>
          </tr>
          <tr>
            <td class="img-td">
              <div>
                <img src="/img/caramel.png" alt="No Ethernet" />
              </div>
            </td>
            <td>Карамельное мороженное</td>
            <td class="count-td">
              <div>
                <button>+</button>
                <p>1</p>
                <button>-</button>
              </div>
            </td>
            <td>330</td>
            <td class="btn-td">
              <button>Убрать</button>
            </td>
          </tr>
          <tr>
            <td class="img-td">
              <div>
                <img src="/img/caramel.png" alt="No Ethernet" />
              </div>
            </td>
            <td>Карамельное мороженное</td>
            <td class="count-td">
              <div>
                <button>+</button>
                <p>1</p>
                <button>-</button>
              </div>
            </td>
            <td>330</td>
            <td class="btn-td">
              <button>Убрать</button>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="all-cost">
        <button>Очистить все</button>
        <button>Оформить заказ</button>
        <p>Итоговая сумма: 880 руб</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  mounted() {
    let toggle = document.querySelector(".toggle");
    let navigationCart = document.querySelector(".navigation-cart");
    let main = document.querySelector(".main");

    toggle.onclick = function () {
      navigationCart.classList.toggle("active");
      main.classList.toggle("active");
    };

    //
    let list = document.querySelectorAll(".navigation-cart li:not(:first-child)");
    function activeLink() {
      list.forEach((item) => item.classList.remove("hovered"));
      this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("click", activeLink));
  },
};
</script>

<style lang="css" scoped>
.topbar {
  width: 100%;
  height: 60px;
  padding: 0 10px;
}

.toggle {
  position: relative;
  top: 10px;
  width: 50px;
  cursor: pointer;
}

.h1 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
  transform: translate(40%);
  margin-bottom: 30px;
}

.details {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: 1fr;
  grid-gap: 30px;
  margin-top: 10px;
}

.details .recentOrders {
  position: relative;
  min-height: 500px;
  background-color: white;
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
}

.all-views {
  position: relative;
  padding: 11px 34px;
  background: #7356ac;
  border-radius: 14px;
  color: white;
}

.details table {
  width: 100%;
  border-collapse: collapse;
}

.details table thead td {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
}
.details table tbody td {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 20px;
}
.details table tbody tr td:not(:last-child) {
  border-right: 2px solid #d9d9d9;
}
.details .recentOrders table tr {
  color: black;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.details .recentOrders table td {
  padding: 19px 19px 19px 0;
}

.details .recentOrders table td:nth-child(2),
.details .recentOrders table td:nth-child(3),
.details .recentOrders table td:nth-child(4) {
  text-align: center;
}

.details .recentOrders table thead td:last-child {
  text-align-last: right;
}
.img-td div {
  width: 120px;
  padding: 3px 19px;
  border: 2px solid #ededed;
  border-radius: 25px;
}
.img-td div img {
  width: 75px;
  height: 120px;
}
.count-td div {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-left: 10px;
}
.count-td div button {
  width: 20px;
  height: 20px;
  border: none;
  background: transparent;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  cursor: pointer;
  margin-top: -8px;
}
.count-td div button:last-child {
  margin-top: -11px;
}
.btn-td button {
  width: 155.35px;
  height: 28px;
  background: rgba(249, 58, 58, 0.5);
  border-radius: 12px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  text-align: center;
  cursor: pointer;
  border: none;
}
.details .recentOrders table tbody td:last-child {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  height: 170px;
}
.all-cost {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-end;
  margin-top: 40px;
  margin-bottom: 20px;
}
.all-cost button {
  width: 205.29px;
  height: 37px;
  border-radius: 12px;
  border: none;
  margin-right: 40px;
  cursor: pointer;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
}
.all-cost button:first-child {
  background: rgba(249, 58, 58, 0.5);
}
.all-cost button:nth-child(2) {
  background: #a3deac;
}
.all-cost p {
  font-size: 24px;
}

/* adaptive */

@media (max-width: 1590px) {
  .navigation-cart {
    left: -80px;
  }

  .navigation-cart.active {
    width: 80px;
    left: 0;
  }

  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 80px);
    left: 80px;
  }

  .cardBox {
    grid-gap: 10px;
  }

  .cardBox .card .cardName {
    font-size: 15px;
  }
}

@media (max-width: 1200px) {
  .navigation-cart {
    left: -300px;
  }

  .navigation-cart.active {
    width: 300px;
    left: 0;
  }

  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 300px);
    left: 0;
  }

  .cardBox {
    grid-template-columns: repeat(2, 1fr);
  }

  .details .recentOrders table td {
    padding-right: 5px;
  }

  .details table tbody td {
    font-size: 16px;
  }
}

@media (max-width: 928px) {
  .details {
    grid-template-columns: repeat(1, 1fr);
    width: 100%;
    padding: 10px;
  }

  .h1 {
    width: 100%;
    transform: none;
    text-align: center;
  }
  .recentOrders {
    overflow-x: auto;
  }

  .navigation-cart {
    width: 100%;
    left: -100%;
    z-index: 1000;
  }

  .navigation-cart.active {
    width: 100vw;
    left: 0;
  }

  .toggle {
    z-index: 10001;
  }

  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }
}

@media (max-width: 610px) {
  .cardBox {
    grid-template-columns: repeat(1, 1fr);
  }

  .card:last-child {
    padding-bottom: 20px;
  }

  .details table thead td {
    font-size: 11px;
  }

  .details .recentOrders table td {
    font-size: 11px;
  }

  .details .recentOrders table td:last-child {
    font-size: 10px;
  }
  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }

  .cardHeader h2 {
    font-size: 16px;
  }

  .all-views {
    padding: 5px 10px;
    border-radius: 10px;
    font-size: 10px;
  }

  .recentCustomers table tr td h4 {
    font-size: 14px;
  }

  .recentCustomers table tr td h4 span {
    font-size: 12px;
  }

  .navigation-cart ul li {
    width: 50%;
  }
}
</style>
