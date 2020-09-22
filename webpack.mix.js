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
    //    .sass('resources/sass/app.scss', 'public/css');
    .styles('resources/assets/plantilla/css/adminlte.css', 'public/css/app.css')
    .scripts(['resources/assets/plantilla/js/bootstrap.bundle.min.js',
        'resources/assets/plantilla/js/adminlte.min.js'
    ], 'public/js/plantilla.js')
