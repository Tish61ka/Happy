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

  <h1 class="h1-top">Пользователи</h1>
  <!--Bot-->
  <div class="details">
    <div class="recentOrders">
      <div class="cardHeader">
        <h2>Список пользователей</h2>
      </div>

      <Loader v-if="load == true"></Loader>
      <table>
        <thead>
          <tr>
            <td>ФИО</td>
            <td>Почта</td>
            <td>Телефон</td>
            <td>Действия</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user">
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.tel }}</td>
            <td>
              <button>Разбанить</button>
              <button>Забанить</button>
              <button>Удалить</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Loader from "../../Loader.vue";
export default {
  data() {
    return {
      users: [],
      load: true,
    };
  },
  components: {
    Loader,
  },
  mounted() {
    this.allUsers();
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
    time_is_widget.init({ Moscow_z71d: {} });
  },
  methods: {
    allUsers() {
      axios
        .get(`/api/users`, {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        })
        .then((res) => {
          this.load = false;
          this.users = res.data.content;
        });
    },
  },
};
</script>

<style lang="css" scoped>
.main {
  position: absolute;
  width: calc(100% - 300px);
  left: 300px;
  min-height: 100vh;
  background-color: white;
  transition: 500ms;
}

.main.active {
  width: calc(100% - 80px);
  left: 80px;
}

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
.h1-top {
  width: 100%;
  text-align: center;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 48px;
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
  display: grid;
  min-height: 500px;
  background-color: white;
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
}

.cardHeader {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.cardHeader h2 {
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
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
  margin-top: 10px;
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

.details .recentOrders table tr {
  color: black;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.details .recentOrders table tr:last-child {
  border-bottom: none;
}

.details .recentOrders table td {
  padding: 19px 19px 19px 0;
}

.details .recentOrders table td:nth-child(2),
.details .recentOrders table td:nth-child(3) {
  text-align: center;
}
.details .recentOrders table td:last-child button {
  width: 131px;
  height: 28px;
  border-radius: 12px;
  border: none;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 600;
  font-size: 13px;
  text-align: center;
  color: black;
  margin-right: 9px;
  cursor: pointer;
}
.details .recentOrders table td:last-child button:first-child {
  background: rgba(71, 188, 90, 0.5);
}
.details .recentOrders table td:last-child button:nth-child(2) {
  background: rgba(245, 123, 71, 0.5);
}
.details .recentOrders table td:last-child button:last-child {
  background: rgba(249, 58, 58, 0.5);
}
.details .recentOrders table td:last-child {
  float: right;
}

.recentCustomers {
  position: relative;
  min-height: 500px;
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
  background: white;
}

.recentCustomers .imgBx {
  position: relative;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
}

.recentCustomers .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.recentCustomers table tr td {
  padding: 12px 10px;
}

.recentCustomers table tr td h4 {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 22px;
}

.recentCustomers table tr td h4 span {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 16px;
  color: #9c96a9;
  line-height: 16px;
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
