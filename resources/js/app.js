require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue3';

const el = document.getElementById('app');

const sweetalert = require('sweetalert2').default;

window.Toast = sweetalert.mixin({
        toast: true,
        position: 'top-right',
        timer: 3500,
        timerProgressBar: true
})

createApp({
    render: () =>
        h(InertiaApp, {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
        }),
})
    .mixin({ methods: { route } })
    .use(InertiaPlugin)
    .mount(el);
