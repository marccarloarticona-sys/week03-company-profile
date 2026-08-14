import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/navbar.css',
                'resources/css/footer.css',
                'resources/css/home.css',
                'resources/css/about.css',
                'resources/css/services.css',
                'resources/css/contact.css',

                'resources/js/navbar.js',
                'resources/js/footer.js',
                'resources/js/home.js',
                'resources/js/about.js',
                'resources/js/services.js',
                'resources/js/contact.js'
            ],
            refresh: true,
        }),
    ],
});