import {createRouter,createWebHistory} from 'vue-router';


import Home from './pages/Home.vue';
import rooms from './pages/Rooms.vue';
import roomsView from './pages/roomView.vue'
import About from './pages/About.vue';
import dashboard from './pages/dashboard/dashboard.vue'

import store from "./store/index.js";

const routes=[
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/rooms',
            name:'rooms',
            component: rooms
        },
        {
            path: '/roomview/:ID',
            name:'roomview',
            props:true,
            component: roomsView
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/login',
            name: 'login',
            component: ()=>import(`./pages/dashboard/login.vue`)
        },
        {
            path:'/dashboard',
            name: 'dashboard',
            component: dashboard,
            beforeEnter: (to, from, next) => {
                if(store.getters.auth){
                    next()
                }
                next('/login')
            },
            children:[
                {
                    path:'',component:()=>import('./pages/dashboard/home.vue')
                },
                {
                    path:'signup',component:()=>import('./pages/dashboard/signup.vue')
                },
                {
                    path:'users',component:()=>import('./pages/dashboard/users.vue')
                },
                {
                    path:'rooms',component:()=>import('./pages/dashboard/rooms.vue')
                },
                {
                    path:'reservations',component:()=>import('./pages/dashboard/reservations.vue')
                }
            ]
        }
    ];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
