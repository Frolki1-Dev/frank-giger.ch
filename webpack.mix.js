let mix = require('laravel-mix');

mix.setPublicPath('www/assets');

mix.sass('resources/sass/app.scss', 'app.css').options({
    processCssUrls: false
});
mix.js('resources/js/app.js', 'app.js');
mix.disableNotifications();