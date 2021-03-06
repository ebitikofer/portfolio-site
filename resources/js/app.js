/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.anime = require('vue-animejs');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.use(anime);

Vue.component('page-title', require('./components/PageTitle.vue').default);
Vue.component('type-title', require('./components/TypeTitle.vue').default);
Vue.component('navigation-bar', require('./components/NavigationBar.vue').default);
Vue.component('navigation-link', require('./components/NavigationLink.vue').default);
Vue.component('header-title', require('./components/HeaderTitle.vue').default);
Vue.component('project-image', require('./components/ProjectImage.vue').default);
Vue.component('portfolio-image', require('./components/PortfolioImage.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        anime
    }
});
