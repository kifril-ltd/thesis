import { createRouter, createWebHistory } from 'vue-router';
import { defineComponent } from 'vue';
// import MainTable from '@/components/mainTable/MainTable.vue';
import MainTable from '@/components/mainTable/MainTable.vue';
import UserLogin from '@/components/userLogin/UserLogin.vue';
import RelationalFilter from '@/components/relationalFilter/RelationalFilter.vue';
import MainHome from '@/components/mainHome/MainHome.vue';
import AttrManagement from '@/components/attributeManagement/AttributeManagement.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: defineComponent(MainHome),
    },
    {
        path: '/table/:tableId',
        name: 'table',
        props: true,
        component: defineComponent(MainTable),
    },
    {
        path: '/auth/login',
        name: 'login',
        component: defineComponent(UserLogin),
    },
    {
        path: '/report/',
        name: 'report',
        component: defineComponent(RelationalFilter),
    },
    {
        path: '/attr/management/',
        name: 'attr_management',
        component: defineComponent(AttrManagement),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
