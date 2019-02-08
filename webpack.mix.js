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

mix.styles([
    'resources/sass/blog-post.css',
    'resources/sass/bootstrap.css',
    'resources/sass/font-awesome.css',
    'resources/sass/metisMenu.css',
    'resources/sass/sb-admin-2.css',
    'resources/sass/styles.css'
], 'public/css/all.css');

mix.scripts([
    'resources/jss/libs/bootstrap.js',
    'resources/jss/libs/jquery.js',
    'resources/jss/libs/metisMenu.js',
    'resources/jss/libs/sb-admin-2.js',
    'resources/jss/libs/scripts.js'
],'public/js/all.js');
