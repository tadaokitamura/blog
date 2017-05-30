const { mix } = require('laravel-mix');

/* Mix Asset Management */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
