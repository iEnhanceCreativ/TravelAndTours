const mix = require('laravel-mix');

mix
    .css('resources/assets/css/style.css', 'public/assets/css')
    .version();