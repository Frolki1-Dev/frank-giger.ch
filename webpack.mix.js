const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css')
    .scripts([
        'node_modules/magnific-popup/dist/jquery.magnific-popup.js',
        'resources/js/owl.carousel.min.js',
        'node_modules/typed.js/lib/typed.js',
        'resources/js/countTo.js',
        'resources/js/custom.js'
    ], 'public/js/dependencies.js').sourceMaps();
