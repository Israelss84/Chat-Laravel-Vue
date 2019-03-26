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

mix.scripts(
	[
		'resources/plantilla/assets/js/vendors.js',
		'resources/plantilla/assets/js/app.js',				
	], 	'public/js/scripts.js')

   .js('resources/js/app.js', 'public/js/')
   
   .styles(
   	[
   		'resources/plantilla/assets/css/vendors.css',
   		'resources/plantilla/assets/css/style.css',
   	], 'public/css/app.css');
