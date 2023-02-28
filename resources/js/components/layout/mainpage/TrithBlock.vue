<template>
  <section class="application container">
    <div>
      <h1>Здесь вы можете оставить свой отзыв</h1>
      <p>
        Для этого будет достаточно вашего имени и электронного адреса. Так же вы можете
        добавить в комментарии свои пожелания и упростить работу для нашего сервиса:)
      </p>
      <svg
        width="228"
        height="111"
        viewBox="0 0 228 111"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M225.316 60.5533C228.245 57.6244 228.245 52.8756 225.316 49.9467L177.587 2.21699C174.658 -0.711941 169.909 -0.711941 166.98 2.21699C164.051 5.14592 164.051 9.89466 166.98 12.8236L209.406 55.25L166.98 97.6764C164.051 100.605 164.051 105.354 166.98 108.283C169.909 111.212 174.658 111.212 177.587 108.283L225.316 60.5533ZM0.910156 62.75H220.013V47.75H0.910156V62.75Z"
          fill="#FCD6E6"
        />
      </svg>
    </div>
    <div>
      <form>
        <input type="text" placeholder="Введите имя" required />
        <input type="text" placeholder="Введите email" required />
        <textarea
          name=""
          id=""
          cols="30"
          rows="10"
          placeholder="Введите коментарий"
          required
          maxlength="170"
        ></textarea>
        <button type="submit">Отправить</button>
      </form>
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
.application {
  display: flex;
  justify-content: space-between;
  margin-bottom: 100px;
}
.application div:first-child {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 100px;
}
.application div h1 {
  width: 850px;
  font-style: normal;
  font-weight: 700;
  font-size: 64px;
  line-height: 71px;
  text-align: center;
  color: #ff4a96;
}
.application div p {
  width: 600px;
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 26px;
  letter-spacing: 0.14em;
  margin-top: 50px;
  margin-bottom: 100px;
}
.application div form {
  width: 600px;
  height: 730px;
  display: flex;
  flex-direction: column;
  justify-content: end;
  align-items: center;
  background-image: url("/img/backform.png");
}
.application div form input {
  width: 80%;
  height: 60px;
  margin-bottom: 30px;
  background: var(--second-txt-color);
  border: 5px solid #fcd18c;
  border-radius: 9px;
  outline: none;
  padding-left: 20px;
  font-size: 18px;
}
.application div form input::placeholder,
.application div form textarea::placeholder {
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  line-height: 131%;
  display: flex;
  align-items: center;
  letter-spacing: 0.14em;
  color: rgba(255, 137, 151, 1);
}
.application div form textarea {
  width: 80%;
  height: 150px;
  margin-bottom: 30px;
  background: var(--second-txt-color);
  border: 5px solid #fcd18c;
  border-radius: 9px;
  outline: none;
  padding-left: 20px;
  padding-top: 10px;
  font-size: 18px;
  resize: none;
}
.application div form button {
  width: 250px;
  height: 60px;
  background: #ffbe66;
  border: 5px solid #ffe5bb;
  border-radius: 9px;
  font-family: "Comfortaa";
  font-style: normal;
  font-weight: 700;
  font-size: 20px;
  line-height: 26px;
  letter-spacing: 0.14em;
  color: #ffffff;
  margin-bottom: 100px;
  cursor: pointer;
}
</style>
