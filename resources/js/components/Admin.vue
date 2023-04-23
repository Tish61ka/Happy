<template>
  <div class="container-cart">
    <AsideAdmin></AsideAdmin>
    <div class="main">
      <HomeAdmin
        v-if="this.$route.fullPath === '/admin' || this.$route.fullPath === '/adminhome'"
      ></HomeAdmin>
      <UserAdmin v-if="this.$route.fullPath === '/adminusers'"></UserAdmin>
    </div>
  </div>
</template>

<script>
import AsideAdmin from "./layout/adminpage/asideAdmin.vue";
import HomeAdmin from "./layout/adminpage/HomeAdmin.vue";
import UserAdmin from "./layout/adminpage/UserAdmin.vue";

export default {
  data() {
    return {
      show: "adminhome",
    };
  },
  components: {
    AsideAdmin,
    HomeAdmin,
    UserAdmin,
  },
  mounted() {},
};
</script>

<style lang="css" scoped>
.container-cart {
  position: relative;
  width: 100%;
}
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
/*main*/
@media (max-width: 1590px) {
  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 80px);
    left: 80px;
  }
}

@media (max-width: 1200px) {
  .main {
    width: 100%;
    left: 0;
  }

  .main.active {
    width: calc(100% - 300px);
    left: 0;
  }
}

@media (max-width: 928px) {
  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }
}

@media (max-width: 610px) {
  .main.active .toggle {
    position: fixed;
    right: 0%;
    left: initial;
  }
}
</style>
