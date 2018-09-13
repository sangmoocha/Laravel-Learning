
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 /**
  * 라우트를 정의하세요.
  * Each route should map to a component. The "component" can
  * 각 라우트는 반드시 컴포넌트와 매핑되어야 합니다.
  * "component"는 `Vue.extend()`를 통해 만들어진
  * 실제 컴포넌트 생성자이거나 컴포넌트 옵션 객체입니다.
  */

let routes = [
    { path: '/profile', component: require('./components/ExampleComponent.vue') },
    { path: '/about', component: require('./components/AboutComponent.vue') }
  ]
  
  /**
   * routes 옵션과 함께 router 인스턴스를 만드세요.
   * 추가 옵션을 여기서 전달해야합니다.
   * 지금은 간단하게 유지하겠습니다. 
   */
  
  const router = new VueRouter({
    routes // `routes: routes`의 줄임
  })

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('about-component', require('./components/AboutComponent.vue'));

const app = new Vue({
    el: '#app',
    router,
});