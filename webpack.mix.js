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

mix
  .scripts([
     'public/vendor/adminlte/bootstrap/js/bootstrap.min.js',
     'public/vendor/adminlte/plugins/pace/pace.min.js',
     'public/vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
     'public/vendor/adminlte/plugins/fastclick/fastclick.js'
   ],'public/js/theme.js')
   .react('resources/assets/js/app.jsx', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
