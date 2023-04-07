<template>
    <section class="about-us-info">
        <div class="container main-content">
            <div>
                <img src="/img/aboutus1.png" alt="No Ethernet" />
                <div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation
                        </p>
                    </div>
                    <router-link to="/#3"
                        ><button>Связаться с нами</button></router-link
                    >
                </div>
            </div>
            <div>
                <div>
                    <h1>О нас</h1>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud exercitation
                        </p>
                    </div>
                </div>
                <img src="/img/aboutus2.png" alt="No Ethernet" />
            </div>
        </div>
    </section>
    <form style="display: flex; flex-direction: column">
        <label for="">Имя</label>
        <input type="text" v-model="name" />
        <label for="">Адрес</label>
        <input type="text" v-model="address" />
        <label for="">Телефон</label>
        <input type="text" v-model="tel" />
        <label for="">Почта</label>
        <input type="text" v-model="email" />
        <button @click.prevent="deliveryCreate()">отправить</button>
        {{ message }}
    </form>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            name: "",
            address: "",
            tel: "",
            email: "",
            message: "",
        };
    },
    methods: {
        deliveryCreate() {
            axios
                .post("/api/delivery/create", {
                    name: this.name,
                    address: this.address,
                    tel: this.tel,
                    email: this.email,
                })
                .then((res) => {
                    this.message = res.data.message;
                    localStorage.setItem("id_user", res.data.content.id);
                    (this.name = ""),
                        (this.address = ""),
                        (this.tel = ""),
                        (this.email = ""),
                        (this.message = "");
                });
        },
    },
};
</script>

<style lang="css" scoped>
.about-us-info {
    width: 100vw;
    height: 100vh;
    background-image: url("/img/backaboutus.png");
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
</style>
