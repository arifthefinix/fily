import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import dashboard from './components/Dashboard.vue'; 
import users from './components/user/Users.vue'; 

const routes = [
    {
        path: '/dashboard',
        component: dashboard
    },
    {
        path: '/users',
        component: users
    }
]

export default new VueRouter({ mode: 'history', routes: routes })
