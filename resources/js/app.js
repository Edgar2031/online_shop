require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import Axios from 'axios';
Vue.use(VueAxios, Axios);

import Main from './Main.vue';
import HomeComponent from './components/Home.vue';
import ProductComponent from './components/Products.vue';
import UserComponent from './components/Users.vue';

let routes = [
		{
			path:'/admin',
			component: HomeComponent
		},
		{
			path:'/admin/produts',
			component: ProductComponent
		},
		{
			path:'/admin/users',
			component: UserComponent
		}
];

let router = new VueRouter({mode: 'history', routes: routes});
let vm = new Vue(Vue.util.extend({router: router}, Main)).$mount('#app');

Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');