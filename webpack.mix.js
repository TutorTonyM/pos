const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
.extract(['jquery', 'popper.js', 'bootstrap'])
.sass('resources/scss/vendor.scss', 'public/css')
.sass('resources/scss/app.scss', 'public/css')
.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts/vendors/fontawesome')
.options({
    processCssUrls: false
});


if(mix.inProduction){
    mix.version();
}