import Vue from 'vue';

//Vue.config.warnExpressionErrors = false
Vue.use(require('vue-resource'));

import MailForm from './components/mail.vue';
import Weather from './components/weather.vue';

/*
* Vue base
* */
var app = new Vue({
    el: '.page-container',
    components: {
        MailForm,
        Weather
    }
});
