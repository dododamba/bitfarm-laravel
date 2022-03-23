require('./bootstrap');
import Vue from 'vue';
import App from './App';
import store from './store';

import ApiService from './api/api';

import VueSweetalert2 from 'vue-sweetalert2';
import titlemixin from './utils/mixins/titlemixin';

import 'sweetalert2/dist/sweetalert2.min.css';
import VueI18n from 'vue-i18n';
import { ENGLISH_TRANSLATIONS } from './translations/en';
import { FRENCH_TRANSLATIONS } from './translations/fr';
import { SPANISH_TRANSLATIONS } from './translations/es';
import { ARABIC_TRANSLATIONS } from './translations/ar';
import { PORTUGUESES_TRANSLATIONS } from './translations/pt';
import { SWAHILI_TRANSLATIONS } from './translations/sw';


Vue.use(VueSweetalert2);
Vue.mixin(titlemixin)

Vue.use(VueI18n);

const TRANSLATIONS = {
    en: ENGLISH_TRANSLATIONS,
    fr: FRENCH_TRANSLATIONS,
    ar: ARABIC_TRANSLATIONS,
    es: SPANISH_TRANSLATIONS,
    pt: PORTUGUESES_TRANSLATIONS,
    swh: SWAHILI_TRANSLATIONS
  }

  
const i18n = new VueI18n({
    locale: 'en',
    messages: TRANSLATIONS,
  })
  
import router from './router';

ApiService.init();


const app = new Vue({
    el: '#app',
    router,
    store,
    i18n,
    render: h => h(App)
});

