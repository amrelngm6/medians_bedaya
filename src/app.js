/*
 |--------------------------------------------------------------------------
 | Components
 |--------------------------------------------------------------------------
 | Import JS components.
*/

const axios = require('axios').default;

import Vue from 'vue';
import VueSimpleAlert from "vue-simple-alert";

import VueDatepickerUi from 'vue-datepicker-ui'

window.Vue = require('vue');

Vue.use(VueSimpleAlert);
Vue.use(VueDatepickerUi);

Vue.component('Datepicker', VueDatepickerUi)

Vue.component('demo', () => import('./demo.vue'));
Vue.component('booking', () => import('./booking.vue'));
Vue.component('modal', () => import('./modal.vue'));

const VueApp = new Vue(
{
    el: '#app',

    components: {
    
    },
    beforeCreate: function() {

    },
    mounted() {

    },
    methods: {
        showVideo(videoId)
        {
            console.log('Show')
            console.log(this.$refs)
            this.$refs.modal.show(videoId);
        }
    }
});
