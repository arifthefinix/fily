import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import dashboard from './components/Dashboard.vue'; 
import users from './components/user/Users.vue';
import userAdd from './components/user/UserAdd.vue'; 
import files from './components/user/Files.vue'; 

const routes = [
    {
        path: '/dashboard',
        component: dashboard
    },
    {
        path: '/users',
        component: users
    },
    {
        path: '/users/add',
        component: userAdd
    },
    {
        path: '/files',
        componet: userAdd
    }
]

export default new VueRouter({ mode: 'history', routes: routes })
