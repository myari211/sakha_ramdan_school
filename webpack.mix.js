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
mix.scripts([
    'public/js/app.js',
    'public/js/index.js',
], 'public/js/yprsa.js').version();

mix.styles([
    'public/css/app.css',
    'public/css/style.css',
], 'public/yprsa.css').version();