import Vue from 'vue';
import Vuex from 'vuex';

import auth from './modules/auth';
import localization from './modules/localization'
import articles from './modules/articles'
import categories from './modules/categories'
import logs from './modules/logs'
import users from './modules/users'
import adherants from './modules/adherants'
import account from './modules/account'
import contact from './modules/contact'
import pompes from './modules/pompes'
import maintenances from './modules/maintenances'
import operations from './modules/operations'
import sites from './modules/sites'

import createPersistedState from 'vuex-persistedstate';

import _ from 'lodash';

const modules = {
    auth, articles, categories, logs, users, pompes, account, contact, operations, maintenances, sites
};

Vue.use(Vuex);

export default new Vuex.Store({
    mutations: {
        resetState(state) {
            _.forOwn(modules, (value, key) => {
                state[key] = _.cloneDeep(value.state);
            });
        },
    },
    modules,
    plugins: [
        createPersistedState({
            paths: ['auth', 'articles', 'categories', 'logs', 'users', 'pompes', 'account', 'contact', 'operations', 'maintenances', 'sites'],
        }),
    ]
});
