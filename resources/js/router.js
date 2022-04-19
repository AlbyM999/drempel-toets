import {createRouter,createWebHistory} from 'vue-router';


import Home from './pages/Home.vue';
import About from './pages/About.vue';

const routes=[
        {
            path: '/',
            name: 'home',
            component: Home
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
            component: ()=>import('./pages/dashboard/dashboard.vue'),
        }
    ];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
