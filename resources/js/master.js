require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

window.Vue = require('vue');
try {	
	require('admin-lte');
} catch (e) {}

let routes = [
  { path: '/profile', component: require('./components/auth/ProfileComponent.vue') },
  { path: '/users', component: require('./components/auth/UsersComponent.vue') },
  { path: '/about', component: require('./components/AboutComponent.vue') }
]

  
const router = new VueRouter({
  mode: 'history',
  routes // `routes: routes`의 줄임
})
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
  el: '#app',
  history,
  router,
});