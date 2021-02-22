import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from './components/pages/login.vue'

Vue.use(VueRouter)



const routes = new VueRouter ({
    mode: 'history',
    routes:[
        
        //Login
         {
            path:'/first/login',
            component: Login,
            name:'login',
           
        },
        
    ]
});

export default routes;