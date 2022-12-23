import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import reactRefresh from '@vitejs/plugin-react-refresh';
import viteCPPlugin from './vite.plugin';
import path from 'path';

const directories = [
    { from: './node_modules/bootstrap-icons/font/fonts/', to: 'public/fonts' },
    { from: './node_modules/video.js/dist/font', to: 'public/fonts' },
    { from: './resources/images', to: 'public/images' },
    { from: './resources/fonts', to: 'public/fonts' },
    { from: './node_modules/tinymce', to: 'public/vendor/tinymce' },
];

export default defineConfig({
    server: {
        host: '0.0.0.0',
        hmr: {
          host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/backend/app.js',
                'resources/js/frontend/app.js',
            ],
            refresh: true,
        }),
        viteCPPlugin({
            in: path.resolve(__dirname, 'resources'),
            out: path.resolve(__dirname, 'public'),
            directories: directories,
            watch: [ 'images', 'fonts' ]
        }),
        reactRefresh(),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources'),
            '~': path.resolve(__dirname, 'node_modules'),
        }
    },
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: 'resources/js/react/app.js',
        },
    },
});
