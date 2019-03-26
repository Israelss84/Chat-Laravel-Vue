

require('./bootstrap');

window.Vue = require('vue');



Vue.component('search-chat', require('./components/search_chat.vue').default);
Vue.component('contact-chat', require('./components/contact_chat.vue').default);
Vue.component('message-chat', require('./components/message_chat.vue').default);
Vue.component('form-chat', require('./components/form_chat.vue').default);


const app = new Vue({
    el: '#app'
});
