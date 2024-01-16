let mix = require('laravel-mix');

mix
    .setPublicPath('public')
    .sass('resources/sass/style.scss', 'css')
    .js('resources/js/index.js', 'js')
