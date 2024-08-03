import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/numerals.js',

                'resources/js/script.js',
                'resources/css/style.css',

                'resources/css/app.css'
            ],
            refresh: true,
        }),
    ],
});
