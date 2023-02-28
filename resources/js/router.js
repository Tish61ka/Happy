import { createWebHistory, createRouter } from "vue-router";


import Index from "./components/Index.vue";
import Login from "./components/Login.vue";
import Profile from "./components/Profile.vue";

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
    ],
});
