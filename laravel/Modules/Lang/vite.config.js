const dotenvExpand = require('dotenv-expand');
<<<<<<< HEAD
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
=======
<<<<<<< HEAD
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));
=======
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/ }));
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: '../../public/build-user',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-user',
            input: [
<<<<<<< HEAD
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/js/app.js'
=======
<<<<<<< HEAD
                __dirname + '/Resources/assets/sass/app.scss',
                __dirname + '/Resources/assets/js/app.js'
=======
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/js/app.js'
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
            ],
            refresh: true,
        }),
    ],
});
