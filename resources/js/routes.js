import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

//importo i componenti

import HomePage from './components/pages/HomePage.vue';
import Contact from './components/pages/Contact.vue';
import ShowPost from './components/posts/ShowPost.vue';

//definiamo rotte
const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: HomePage },
        { path: '/contacts', component: Contact },
        { path: '/posts/:id', component: ShowPost, name: 'post-show' }
    ]
});

export default router;