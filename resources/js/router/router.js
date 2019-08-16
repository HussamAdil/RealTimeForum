import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/login/Login'
import Signup from '../components/Signup'

Vue.use(VueRouter)

const routes = [
    { path: '/login', component: Login },
    { path: '/Signup', component: Signup },
   
  ]

  const router = new VueRouter({
    routes ,
    mode :'history'
  })

  export default router