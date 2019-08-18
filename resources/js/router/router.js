import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/login/Login'
import Logout from '../components/Logout'
import Signup from '../components/Signup'
import Forum from '../components/forum/Forum'
import Ask from '../components/forum/Ask'

import Read from '../components/forum/Read'
Vue.use(VueRouter)

const routes = [
    { path: '/login', component: Login },
    { path: '/Logout', component: Logout },
    { path: '/Signup', component: Signup },
    { path: '/Forum', component: Forum , name:'Forum' },
    { path: '/question/ask', component: Ask , name:'Ask' },
    { path: '/question/:slug', component: Read , name:'Read' },

  ]

  const router = new VueRouter({
    routes ,
    mode :'history'
  })

  export default router