<template>
    <Header v-show="this.$route.path != '/login'"></Header>
    <main> 
        <router-view></router-view>
    </main>
    <Footer v-show="this.$route.path != '/login'"></Footer> 
</template>

<script>
import api from "../api";
import Footer from "./layout/Footer.vue";
import Header from "./layout/Header.vue";

export default {
    name: "Main",
    data(){
        return {

        }
    },
    mounted(){
        console.log(this.$route.path);
    },
    components: {
        Header,
        Footer,
    }
}
</script>

<style scoped>

</style>
