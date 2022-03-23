import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from '../views/Home';
import Contact from '../views/Contact';
import About from '../views/About'
import Realisation from '../views/Realisation'
import Login from '../views/Login'
import Dashboard from '../views/backend/Dashboard'

import Logs from '../views/backend/logs/Index'

import Pompe from '../views/backend/pompes/Index'
import PompeShow from '../views/backend/pompes/Show'
import PompeEdit from '../views/backend/pompes/Edit'
import PompeCreate from '../views/backend/pompes/Create'


import Maintenance from '../views/backend/maintenances/Index'
import Maintenanceshow from '../views/backend/maintenances/Show'
import MaintenanceEdit from '../views/backend/maintenances/Edit'
import MaintenanceCreate from '../views/backend/maintenances/Create'



import Operation from '../views/backend/operations/Index'
import Operationshow from '../views/backend/operations/Show'
import OperationEdit from '../views/backend/operations/Edit'
import OperationCreate from '../views/backend/operations/Create'

import User from '../views/backend/users/Index'
import UserShow from '../views/backend/users/Show'
import UserEdit from '../views/backend/users/Edit'
import UserCreate from '../views/backend/users/Create'

Vue.use(VueRouter);

const router = new VueRouter({
    routes : [
        {
            path: '/',
            name: 'home',
            component: Home,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/about',
            name: 'about',
            component: About,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/realisations',
            name: 'realisations',
            component: Realisation,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
            meta: {
                requiresAuth: false,
                hideForAuth: false,
            }
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
        {
            path: '/pompes',
            name: 'pompesIndex',
            component: Pompe,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
        {
            path: '/pompes-create',
            name: 'pompesCreate',
            component: PompeCreate,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
        {
            path: '/pompes/:slug/edit',
            name: 'pompesEdit',
            component: PompeEdit,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
        {
            path: '/pompes/:slug/edit',
            name: 'pompesShow',
            component: PompeShow,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },

        {
            path: '/maintenances',
            name: 'maintenancesIndex',
            component: Maintenance,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
       
        {
            path: '/operation',
            name: 'operationIndex',
            component: Operation,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
        {
            path: '/operation',
            name: 'operationCreate',
            component: () => OperationCreate,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
        {
            path: '/operation/:slug/edit',
            name: 'operationEdit',
            component: () => OperationEdit,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
        {
            path: '/operation/:slug/edit',
            name: 'operationShow',
            component: () => OperationShow,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },

        {
            path: '/users/',
            name: 'users',
            component: User,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },

        {
            path: '/users-create',
            name: 'userCreate',
            component: UserCreate,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },

      
        {
            path: '/logs',
            name: 'logs',
            component: Logs,
            meta: {
                requiresAuth: true,
                hideForAuth: false,
            }
        },
       
    ]
});


export default router;
