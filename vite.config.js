import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/sass/app.scss', // Подключаем ваш SASS файл
            ],
            refresh: true, // Включаем автоматическую перезагрузку при изменениях
        }),
    ],
});
