<template>
  <div class="back-log-in">
    <div class="main">
      <input type="checkbox" id="chk" aria-hidden="true" />
      <div class="signup">
        <form>
          <label for="chk" aria-hidden="true">Happy Ice Cream</label>
          <input
            type="text"
            v-model="registration.firstName"
            name="txt"
            placeholder="Имя"
            required
            disabled
          />
          <input
            type="email"
            v-model="registration.email"
            name="email"
            placeholder="Email"
            required
            disabled
          />
          <input
            type="password"
            v-model="registration.password"
            name="pswd"
            placeholder="Пароль"
            required
            disabled
          />
          <input
            type="password"
            v-model="registration.passwordConfirm"
            name="pswd"
            placeholder="Повторите пароль"
            required
            disabled
          />
          <button @click.prevent="registr">Зарегистрироваться</button>
          <router-link :to="{ name: 'Index' }" class="go-back"
            >Вернуться назад</router-link
          >
        </form>
      </div>
      <div class="login">
        <form>
          <label for="chk" aria-hidden="true">Авторизация</label>
          <input
            type="email"
            v-model="login.email"
            name="email"
            placeholder="Email"
            required=""
          />
          <input
            type="password"
            v-model="login.password"
            name="pswd"
            placeholder="Password"
            required=""
          />
          <button @click.prevent="signIn">Login</button>
          <router-link :to="{ name: 'Index' }" class="go-back"
            >Вернуться назад</router-link
          >
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import api from "../api";
export default {
  name: "Login",
  data() {
    return {
      login: {
        email: "",
        password: "",
      },
      registration: {
        firstName: "",
        email: "",
        password: "",
        passwordConfirm: "",
        check: true,
      },
    };
  },
  mounted() {
    if (localStorage.getItem("token")) {
      this.getMe();
      this.$router.push({
        name: "Admin",
      });
    }
  },
  methods: {
    signIn() {
      console.log(this.login);
      axios.get("/sanctum/csrf-cookie").then((r) => {
        axios
          .post("/api/signIn", {
            email: this.login.email,
            password: this.login.password,
          })
          .then((response) => {
            this.login.email = "";
            this.login.password = "";
            console.log(response);
            window.localStorage.setItem("token", response.data.content);
            this.getMe();
            (this.$store.state.isAuth = true),
              this.$router.push({
                name: "Admin",
              });
          });
      });
    },
    getMe() {
      api.get("/api/me").then((r) => {
        this.$store.state.user = r.data;
        console.log(this.$store.state.user);
      });
    },
    registr() {
      console.log(this.registration);
      if (this.registration.check) {
        if (this.registration.password === this.registration.passwordConfirm) {
          axios.get("/sanctum/csrf-cookie").then((r) => {
            api
              .post("/api/signUp", {
                name: this.registration.firstName,
                email: this.registration.email,
                password: this.registration.password,
              })
              .then((response) => {
                if (response.data.status === false) {
                  console.log(response.data.msg);
                } else {
                  window.localStorage.setItem("token", response.data["access_token"]);
                  this.getMe();
                  (this.$store.state.isAuth = true),
                    this.$router.push({
                      name: "Admin",
                    });
                }
              });
          });
        } else {
          console.log("Пароли не совпадают");
        }
      } else {
        console.log("Вы не одобрили обработку персональных данных");
      }
    },
  },
};
</script>

<style lang="css" scoped>
.back-log-in {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-image: url("img/backLogin.png");
  background-size: cover;
  background-repeat: no-repeat;
}
.main {
  width: 420px;
  height: 580px;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.01);
  box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.25);
  backdrop-filter: blur(5px);
  border-radius: 50px;
}
#chk {
  display: none;
}
.signup {
  position: relative;
  width: 100%;
  height: 100%;
}
.signup form,
.login form {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 20px;
}
.main label {
  color: var(--second-txt-color);
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 36px;
  line-height: 40px;
  cursor: pointer;
  transition: 0.5s ease-in-out;
  margin-top: 20px;
  margin-bottom: 30px;
}
.signup input {
  width: 310px;
  height: 50px;
  background: var(--second-txt-color);
  justify-content: center;
  display: flex;
  margin: 10px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 10px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 18px;
}
.login form input {
  width: 310px;
  height: 50px;
  background: #b6a3d9;
  justify-content: center;
  display: flex;
  margin: 10px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 10px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 18px;
}
/*
.login form input[type="password"]::-ms-reveal {
  background: black;
  color: #fff;
}
*/

.login form input::placeholder {
  color: #ffffff;
}
.login label {
  margin-top: 10px;
}
.main button {
  width: 60%;
  height: 40px;
  margin: 10px auto;
  justify-content: center;
  display: block;
  color: #fff;
  background: #573b8a;
  font-size: 1em;
  font-weight: bold;
  margin-top: 20px;
  outline: none;
  border: none;
  border-radius: 5px;
  transition: 0.2s ease-in;
  cursor: pointer;
}
.main button:hover {
  background: #6d44b8;
}
.login {
  height: 560px;
  background: #ffffff;
  border-radius: 60% / 10%;
  transform: translateY(-490px);
  transition: 0.8s ease-in-out;
}
.login label {
  color: #573b8a;
  transform: scale(0.6);
}

#chk:checked ~ .login {
  transform: translateY(-490px);
}
.login label {
  transform: scale(1);
}
.signup label {
  transform: scale(0.7);
}
.go-back {
  color: black;
  font-size: 18px;
  cursor: pointer;
}
</style>
