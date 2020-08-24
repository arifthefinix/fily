import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import dashboard from './components/Dashboard.vue'; 
import users from './components/user/Users.vue';
import userAdd from './components/user/UserAdd.vue'; 
import files from './components/file/Files.vue'; 
import addFile from './components/file/AddFile';
import fileList from './components/file/fileList';

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
        path: '/add-user',
        component: userAdd
    },
    {
        path: '/files',
        component: files
    },
    {
        path: '/add-file',
        component: addFile
    },
    {
        path: '/file-list/:id',
        component: fileList,
        name: 'fileList'
    }
]

export default new VueRouter({ mode: 'history', routes: routes })
