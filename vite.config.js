import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Resources paths
                'resources/css/app.css', 
                'resources/sass/app.scss', 
                'resources/js/app.js',

                // Resources assets js file paths
                'resources/assets/js/carousel',
                'resources/assets/js/category-menu',
                'resources/assets/js/choices',
                'resources/assets/js/comment',
                'resources/assets/js/cookies',
                'resources/assets/js/count-down',
                'resources/assets/js/countdown',
                'resources/assets/js/defaultmenu',
                'resources/assets/js/live-chat',
                'resources/assets/js/modal',
                'resources/assets/js/picker',
                'resources/assets/js/show-password',
                'resources/assets/js/swiper',

            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: (['resources/assets/images/', 'resources/assets/libs/', 'resources/assets/icon-fonts/', 'resources/assets/js/load-more.js', 'resources/assets/js/sticky.js', ]),
                dest: 'assets/'
              }
            ]
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});
