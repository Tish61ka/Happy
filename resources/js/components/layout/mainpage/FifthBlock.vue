<template>
    <section class="contacts">
        <div class="contain-contacts">
            <img src="img/map.png" alt="No Ethernet">
            <div class="info-contacts">
                <h1>Контакты</h1>
                <p>e-mail: tish61ka@mail.ru</p>
                <p>8 (999) 819-99-90</p>
                <p>Ул. Н. Островского 68к2</p>
            </div>
        </div>
        <img src="img/icecream.png" class="fly-icecream" alt="No Ethernet">
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
    .contacts {
        position: relative;
        width: 100vw;
        height: 1000px;
        background-image: url("/img/backcontacs.png");
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: 150px;
    }

    .contain-contacts {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 0 auto;
        width: 1100px;
    }

    .info-contacts {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 490px;
        height: 491px;
        background: #FDF8E2;
        border: 14px solid #FF96D9;
        border-radius: 21px;
        margin-top: 90px;
    }

    .info-contacts h1 {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 58px;
        text-align: center;
        color: #BA97FE;
        margin-bottom: 40px;
    }

    .info-contacts p {
        font-family: "Roboto";
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 29px;
        text-align: center;
        color: #BA97FE;
        margin-bottom: 30px;
    }

    .fly-icecream {
        position: absolute;
        top: 40%;
        left: 47.3%;
    }
</style>