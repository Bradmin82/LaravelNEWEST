
require('./bootstrap');

//import Vue from 'vue';
window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

import Vue from 'vue';
import Buefy from 'buefy';
import Buefy from 'node_modules/buefy/src/scss/buefy';
Vue.use(Buefy);

//Vue.component(Buefy.Checkbox.name, Buefy.Checkbox);


//Vue.component('slug-widget', require('./components/slugWidget.vue'));


/*
var app = new Vue({
  el: '#app',
  data: {}
});
*/

require('./manage')
