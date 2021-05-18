import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '../views/Dashboard.vue'
import Parameters from '../views/Parameters.vue'

const routes = [

  {
    path: '/',
    name: 'Dashboard',
    component: Dashboard
  },

  {
    path: '/parameters',
    name: 'Parameters',
    component: Parameters
  }

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
