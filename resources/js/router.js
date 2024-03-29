import { createWebHistory, createRouter } from "vue-router";

import Index from "./components/Index.vue";
import Login from "./components/Login.vue";
import Profile from "./components/Profile.vue";
import AboutUs from "./components/AboutUs.vue";
import Cart from "./components/Cart.vue";
import Catalog from "./components/Catalog.vue";
import Product from "./components/Product.vue";
import Admin from "./components/Admin.vue";
import Construct from "./components/Construct.vue";
import Delivery from './components/Delivery.vue'

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
        {
            path: "/cart",
            name: "Cart",
            component: Cart,
        },
        {
            path: "/order",
            name: "Order",
            component: Cart,
        },
        {
            path: "/catalog",
            name: "Catalog",
            component: Catalog,
        },
        {
            path: "/product/:id",
            name: "Product",
            component: Product,
        },
        {
            path: "/admin",
            name: "Admin",
            component: Admin,
        },
        {
            path: "/adminhome",
            name: "HomeAdmin",
            component: Admin,
        },
        {
            path: "/adminusers",
            name: "UserAdmin",
            component: Admin,
        },
        {
            path: "/adminreviews",
            name: "ReviewAdmin",
            component: Admin,
        },
        {
            path: "/adminproducts",
            name: "ProductAdmin",
            component: Admin,
        },
        {
            path: "/adminorders",
            name: "OrdersAdmin",
            component: Admin,
        },
        {
            path: "/catalog/:page",
            name: "catalog",
            component: Catalog,
        },
        {
            path: "/constructor",
            name: "Construct",
            component: Construct,
        },
        {
            path: "/delivery",
            name: "Delivery",
            component: Delivery,
        },
    ],
});
