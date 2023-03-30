import { createWebHistory, createRouter } from "vue-router";


import Index from "./components/Index.vue";
import Login from "./components/Login.vue";
import Profile from "./components/Profile.vue";
import AboutUs from "./components/AboutUs.vue";
import TrithBlock from "./components/layout/mainpage/TrithBlock.vue";

export default createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/",
            name: "Index",
            component: Index,
        },
        {
            path: "/login",
            name: "Login",
            component: Login,
        },
        {
            path: "/profile",
            name: "Profile",
            component: Profile,
        },
        {
            path: "/aboutus",
            name: "AboutUs",
            component: AboutUs,
        },
    ],
});
