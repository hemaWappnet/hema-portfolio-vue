import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { VueToastPlugin } from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-bootstrap.css';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
// import VLazyImage from "v-lazy-image/v2";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Developer Portfolio';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueToastPlugin)
            // .use(VLazyImage)
            .mount(el);
    },
    progress: {
        color: '#bd93f9',
    },
});

// Bootstrap JS
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// Initialize tooltips and popovers
document.addEventListener('DOMContentLoaded', () => {
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
});

// Dynamic theme handling based on dark mode cookie
const updateTheme = (isDark) => {
    if (isDark) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
};

// Check for saved theme preference
document.addEventListener('DOMContentLoaded', () => {
    const cookies = document.cookie.split(';');
    let darkMode = false;

    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i].trim();
        if (cookie.startsWith('darkMode=')) {
            darkMode = cookie.substring('darkMode='.length) === 'dark';
            break;
        }
    }

    updateTheme(darkMode);
});