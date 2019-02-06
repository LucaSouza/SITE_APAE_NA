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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/material-design-lite/material.min.css', 'public/css');
mix.copy('node_modules/material-design-lite/material.min.js', 'public/js');
mix.copy('resources/js/js-slide-principal.js', 'public/js');
mix.copy('resources/css/style.css', 'public/css');
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js');
