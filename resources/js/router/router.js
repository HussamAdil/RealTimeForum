import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/login/Login'
import Logout from '../components/Logout'
import Signup from '../components/Signup'
import Forum from '../components/forum/Forum'

Vue.use(VueRouter)

const routes = [
    { path: '/login', component: Login },
    { path: '/Logout', component: Logout },
    { path: '/Signup', component: Signup },
    { path: '/Forum', component: Forum , name:'Forum' },
   
  ]

  const router = new VueRouter({
    routes ,
    mode :'history'
  })

  export default router