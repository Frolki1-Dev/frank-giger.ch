let mix = require('laravel-mix');

mix.setPublicPath('assets');

mix.sass('resources/sass/app.scss', 'app.css');
mix.js('resources/js/app.js', 'app.js');