import { createRouter, createWebHistory } from 'vue-router';
import RequestForm from '@/components/RequestForm.vue';
import MyRequest from '@/components/MyRequest.vue';


const routes = [
  { path: '/', component: RequestForm, name: 'index' },
  { path: '/myrequest', component: MyRequest, name: 'myrequest' },

];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;