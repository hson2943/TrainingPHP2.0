const admin = [{
    path: '/',
    name: 'home',
    component: () =>
        import('../layouts/layout.vue'),
    children: [
        {
            path: '',
            name: 'index',
            component: () => import('../pages/index.vue'),
        },
        {
            path: 'update',
            name: 'update',
            component: () => import('../pages/detail.vue'),

        },
        {
            path: 'detail',
            name: 'detail',
            component: () => import('../pages/update.vue'),

        }
        ,
        {
            path: '/:pathMatch(.*)*',
            name: 'notFound',
            component: () => import('../pages/notFound.vue')
        }
    ],
}]

export default admin;