const { mix } = require('laravel-mix');

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

mix.js([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/materialize-css/dist/js/materialize.min.js',
        'resources/assets/js/app.js'
    ], 'public/js')
   .styles([
        'node_modules/materialize-css/dist/css/materialize.min.css',
    ], 'public/css/app.css')
   .sass('resources/assets/sass/app.scss', 'public/css/all.css');
