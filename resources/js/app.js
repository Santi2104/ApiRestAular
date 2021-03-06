/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('admin-lte');
require( '../../node_modules/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js' );
require( '../../node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' );
require( '../../node_modules/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js' );

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('career-component', require('./components/admin/Career/CareerComponent.vue').default);
Vue.component('course-component', require('./components/admin/Course/CourseComponent.vue').default);
Vue.component('select-career', require('./components/admin/Course/SelectCareerComponent.vue').default);
Vue.component('classroom-component', require('./components/admin/classroom/ClassroomComponent.vue').default);
Vue.component('show-classroom-schedule', require('./components/admin/classroom/ShowClassroomScheduleComponent.vue').default);
Vue.component('last-schedule', require('./components/admin/schedule/LastScheduleComponent.vue').default);
Vue.component('schedule-table', require('./components/admin/schedule/ScheduleTableComponent.vue').default);//Este componente no deberia existir
Vue.component('show-schedule', require('./components/admin/schedule/ShowScheduleComponent.vue').default);
Vue.component('admin-table-component', require('./components/admin/user/AdminTableComponent.vue').default);

//Componentes de el bedel de exactas
Vue.component('exactas-schedule-index', require('./components/exactas/schedule/ExactasScheduleIndex').default);
Vue.component('exactas-schedule-create', require('./components/exactas/schedule/ExactasScheduleCreate').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
});
