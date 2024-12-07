import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/perfect-scrollbar.css', 
                'resources/css/tooltips.css', 
                'resources/js/app.js', 
                'resources/css/soft-ui-dashboard-tailwind.css', 
                'resources/js/soft-ui-dashboard-tailwind.js',
                'resources/css/nucleo-icons.css',
                'resources/css/nucleo-svg.css',
                'resources/js/plugins/chartjs.min.js',
                'resources/js/perfect-scrollbar.js',
                'resources/js/chart-1.js',
                'resources/js/chart-2.js',
                'resources/js/plugins/perfect-scrollbar.min.js',
                'resources/js/dropdown.js',
                'resources/js/fixed-plugin.js',
                'resources/js/nav-pills.js',
                'resources/js/navbar-collapse.js',
                'resources/js/navbar-sticky.js',
                'resources/js/sidenav-burger.js',
                'resources/js/tooltips.js',
            ],
            refresh: true,
        }),
    ],
});
