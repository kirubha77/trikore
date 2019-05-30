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

mix.styles([
		'themes/porto/assets/vendor/bootstrap/css/bootstrap.min.css',
		'themes/porto/assets/vendor/fontawesome-free/css/all.min.css',
		'themes/porto/assets/vendor/animate/animate.min.css',
		'themes/porto/assets/vendor/simple-line-icons/css/simple-line-icons.min.css',
		'themes/porto/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
		'themes/porto/assets/vendor/owl.carousel/assets/owl.theme.default.min.css',
		'themes/porto/assets/vendor/magnific-popup/magnific-popup.min.css',
		'themes/porto/assets/css/theme.css',
		'themes/porto/assets/css/theme-elements.css',
		'themes/porto/assets/css/theme-blog.css',
		'themes/porto/assets/css/theme-shop.css',
		'themes/porto/assets/vendor/rs-plugin/css/settings.css',
		'themes/porto/assets/vendor/rs-plugin/css/layers.css',
		'themes/porto/assets/vendor/rs-plugin/css/navigation.css',
		'themes/porto/assets/vendor/circle-flip-slideshow/css/component.css',
		'themes/porto/assets/css/skins/default.css',
		'themes/porto/assets/css/custom.css'],'themes/porto/asset/css/app.css');


mix.scripts([
	'themes/porto/assets/vendor/modernizr/modernizr.min.js',
	'themes/porto/assets/vendor/jquery/jquery.min.js',
	'themes/porto/assets/vendor/jquery.appear/jquery.appear.min.js',
	'themes/porto/assets/vendor/jquery.easing/jquery.easing.min.js',
	'themes/porto/assets/vendor/jquery.cookie/jquery.cookie.min.js',
	'themes/porto/assets/vendor/popper/umd/popper.min.js',
	'themes/porto/assets/vendor/bootstrap/js/bootstrap.min.js',
	'themes/porto/assets/vendor/common/common.min.js',
	'themes/porto/assets/vendor/jquery.validation/jquery.validate.min.js',
	'themes/porto/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js',
	'themes/porto/assets/vendor/jquery.gmap/jquery.gmap.min.js',
	'themes/porto/assets/vendor/jquery.lazyload/jquery.lazyload.min.js',
	'themes/porto/assets/vendor/isotope/jquery.isotope.min.js',
	'themes/porto/assets/vendor/owl.carousel/owl.carousel.min.js',
	'themes/porto/assets/vendor/magnific-popup/jquery.magnific-popup.min.js',
	'themes/porto/assets/vendor/vide/jquery.vide.min.js',
	'themes/porto/assets/vendor/vivus/vivus.min.js',
	'themes/porto/assets/js/theme.js',
	'themes/porto/assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js',
	'themes/porto/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js',
	'themes/porto/assets/js/custom.js',
	'themes/porto/assets/js/theme.init.js'],'themes/porto/asset/js/app.js');


   
   