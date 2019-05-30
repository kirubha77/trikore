/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/examples/examples.gallery.js":
/*!************************************************!*\
  !*** ./assets/js/examples/examples.gallery.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Name: 			Elements - Image Gallery - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	7.4.0
*/
(function ($) {
  'use strict';
  /*
  Thumb Gallery
  */

  var $thumbGalleryDetail1 = $('#thumbGalleryDetail'),
      $thumbGalleryThumbs1 = $('#thumbGalleryThumbs'),
      flag = false,
      duration = 300;
  $thumbGalleryDetail1.owlCarousel({
    items: 1,
    margin: 10,
    nav: true,
    dots: false,
    loop: false,
    navText: [],
    rtl: $('html').attr('dir') == 'rtl' ? true : false
  }).on('changed.owl.carousel', function (e) {
    if (!flag) {
      flag = true;
      $thumbGalleryThumbs1.trigger('to.owl.carousel', [e.item.index - 1, duration, true]);
      flag = false;
    }
  });
  $thumbGalleryThumbs1.owlCarousel({
    margin: 15,
    items: 4,
    nav: false,
    center: false,
    dots: false,
    rtl: $('html').attr('dir') == 'rtl' ? true : false
  }).on('click', '.owl-item', function () {
    $thumbGalleryDetail1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
  }).on('changed.owl.carousel', function (e) {
    if (!flag) {
      flag = true;
      $thumbGalleryDetail1.trigger('to.owl.carousel', [e.item.index, duration, true]);
      flag = false;
    }
  });
  /*
  Thumb Gallery 2
  */

  var $thumbGalleryDetail2 = $('#thumbGalleryDetail2'),
      $thumbGalleryThumbs2 = $('#thumbGalleryThumbs2'),
      flag = false,
      duration = 300;
  $thumbGalleryDetail2.owlCarousel({
    items: 1,
    margin: 10,
    nav: false,
    dots: false,
    rtl: $('html').attr('dir') == 'rtl' ? true : false
  }).on('changed.owl.carousel', function (e) {
    if (!flag) {
      flag = true;
      $thumbGalleryThumbs2.trigger('to.owl.carousel', [e.item.index, duration, true]);
      flag = false;
    }
  });
  $thumbGalleryThumbs2.owlCarousel({
    margin: 15,
    items: 4,
    nav: false,
    center: true,
    dots: false,
    rtl: $('html').attr('dir') == 'rtl' ? true : false
  }).on('click', '.owl-item', function () {
    $thumbGalleryDetail2.trigger('to.owl.carousel', [$(this).index(), duration, true]);
  }).on('changed.owl.carousel', function (e) {
    if (!flag) {
      flag = true;
      $thumbGalleryDetail2.trigger('to.owl.carousel', [e.item.index, duration, true]);
      flag = false;
    }
  });
}).apply(this, [jQuery]);

/***/ }),

/***/ 7:
/*!******************************************************!*\
  !*** multi ./assets/js/examples/examples.gallery.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\trikore\assets\js\examples\examples.gallery.js */"./assets/js/examples/examples.gallery.js");


/***/ })

/******/ });