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
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/partials/footer.scss', 'public/css/partials')
   .sass('resources/sass/partials/main.scss', 'public/css/partials')
   .sass('resources/sass/menu/han-thuyen.scss', 'public/css/menu')
   .sass('resources/sass/menu/saigon-centre.scss', 'public/css/menu')
   .sass('resources/sass/home-page/home-page.scss', 'public/css/home-page')
   .sass('resources/sass/home-page/franchise.scss', 'public/css/home-page');
