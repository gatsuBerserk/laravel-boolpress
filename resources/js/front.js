window.axios = require("axios");

window.Vue = require('vue'); 
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import App from "./views/App.vue";
import Home from "./pages/Home.vue"; 
import Posts from "./pages/Posts.vue"; 
import About from "./pages/About.vue"; 
import Contacts from "./pages/Contacts.vue";

const router = new VueRouter({
    mode:"history",
    routes : [
        {
            path: "/home", 
            name:"home", 
            component: Home
        }, 
        {
            path: "/posts", 
            name:"posts", 
            component: Posts
        },
        {
            path: "/about", 
            name:"about", 
            component:About 
        },
        {
            path: "/contacts", 
            name:"contacts", 
            component: Contacts 
        },   

    ]

});

const app = new Vue({
    el: '#root',
    render: h => h(App), 
    router
});
