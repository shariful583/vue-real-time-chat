require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)



Vue.component('chat', require('./components/chat.vue').default);

const app = new Vue({
    el: '#app',
    data:{
        message:'',
        chat:{
            msg: []
        }
    },

    methods:{
        msg(){
            if(this.message.length != 0) {
                this.chat.msg.push(this.message);
                this.message = ''

            }
        }
    }

});
