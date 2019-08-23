import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/login/Login'
import Logout from '../components/Logout'
import Signup from '../components/Signup'
import CreateCategory from '../components/category/CreateCategory'
import Forum from '../components/forum/Forum'
import Ask from '../components/forum/Ask'

import Read from '../components/forum/Read'
import Replies from '../components/Replay/Replies'
Vue.use(VueRouter)

const routes = [
    { path: '/login', component: Login },
    { path: '/Logout', component: Logout },
    { path: '/Signup', component: Signup },
    { path: '/CreateCategory', component: CreateCategory },
    { path: '/Forum', component: Forum , name:'Forum' },
    { path: '/question/ask', component: Ask , name:'Ask' },
    { path: '/question/:slug', component: Read , name:'Read' },
    { path: 'replies', component: Replies , name:'Replies' },

  ]

  const router = new VueRouter({
    routes ,
    mode :'history'
  })

  export default router