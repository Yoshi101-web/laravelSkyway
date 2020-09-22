import Vue from 'vue'
import VueRouter from 'vue-router'
import Chat from './components/Chat'
import Room from './components/Room'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/chat',
            name: 'chat.chat',
            component: Chat
        },
        {
            path: '/chat/room',
            name: 'chat.room',
            component: Room
        },
    ]
})