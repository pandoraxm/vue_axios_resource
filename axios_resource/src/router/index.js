import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import Curl from '@/components/Curl'
import Node from '@/components/Node'
import VueResource from 'vue-resource'

Vue.use(Router)
Vue.use(VueResource)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Hello',
      component: Hello
    },
    {
      path: '/curl',
      name: 'Curl',
      component: Curl
    },
    {
      path: '/node',
      name: 'Node',
      component: Node
    }
  ]
})
