import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
import one from './components/pages/OneVuePage'
import two from './components/pages/TwoVuePage'
import three from './components/pages/basic/hooks'
import four from './components/pages/basic/methods'
import home from './components/pages/home'

const routes = [
    {
        path: '/home',
        component: home
    },
    {
        path: '/uno',
        component: one
    },
    {
        path: '/dos',
        component: two
    },
    //Vue Hooks
    {
        path: '/tres',
        component: three
    },

    {
        path: '/cuatro',
        component: four
    },
]

export default new Router({
    mode: 'history',
    routes
})