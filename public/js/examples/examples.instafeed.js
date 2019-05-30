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
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/examples/examples.instafeed.js":
/*!**************************************************!*\
  !*** ./assets/js/examples/examples.instafeed.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Name: 			Instafeed - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	7.4.0
*/
(function ($) {
  'use strict';

  var clientId = 'bd997d4f1b274333addf2193d242b414',
      accessToken = '7439366193.bd997d4.6b4f1bccd677414e924485f74be0b3c1';

  if ($('#instafeedBasic').get(0)) {
    // Instagram Feed Basic
    var feed = new Instafeed({
      target: 'instafeedBasic',
      get: 'user',
      userId: 'self',
      clientId: clientId,
      accessToken: accessToken,
      resolution: 'standard_resolution',
      limit: 3,
      template: '<div class="col-4 mb-4 pt-2">' + '<a href="{{link}}" target="_blank">' + '<span class="thumb-info thumb-info-lighten thumb-info-centered-info thumb-info-no-borders">' + '<span class="thumb-info-wrapper">' + '<img src="{{image}}" class="img-fluid" alt="{{caption}}" />' + '</span>' + '</span>' + '</a>' + '</div>',
      after: function after() {
        var $wrapper = $('#instafeedBasic'),
            html = $wrapper.html(); // Build Html

        $wrapper.html('').append('<div class="row"></div>').find('.row').append(html);
      }
    }); // Init Instafeed Basic

    feed.run();
  }
  /*
  * Instafeed Carousel
  */


  if ($('#instafeedCarousel').get(0)) {
    // Instagram Feed Carousel
    var feed = new Instafeed({
      target: 'instafeedCarousel',
      get: 'user',
      userId: 'self',
      clientId: clientId,
      accessToken: accessToken,
      resolution: 'standard_resolution',
      limit: 6,
      template: '<div>' + '<a target="_blank" href="{{link}}">' + '<img src="{{image}}" class="img-fluid" alt="{{caption}}" />' + '</a>' + '</div>',
      after: function after() {
        var $wrapper = $('#instafeedCarousel');
        $wrapper.addClass('owl-carousel').owlCarousel({
          items: 1,
          nav: false,
          dots: false,
          loop: true,
          navText: [],
          autoplay: true,
          autoplayTimeout: 6000,
          rtl: $('html').attr('dir') == 'rtl' ? true : false
        });
      }
    }); // Init Instafeed Carousel

    feed.run();
  }
  /*
  * Instafeed No Margins
  */


  if ($('#instafeedNoMargins').get(0)) {
    // Instagram Feed Basic
    var feed = new Instafeed({
      target: 'instafeedNoMargins',
      get: 'user',
      userId: 'self',
      clientId: clientId,
      accessToken: accessToken,
      resolution: 'standard_resolution',
      limit: 6,
      template: '<div class="col-6 col-xl-4 px-0">' + '<a href="{{link}}" target="_blank">' + '<span class="thumb-info thumb-info-lighten thumb-info-centered-info thumb-info-no-borders">' + '<span class="thumb-info-wrapper">' + '<img src="{{image}}" class="img-fluid" alt="{{caption}}" />' + '</span>' + '</span>' + '</a>' + '</div>',
      after: function after() {
        var $wrapper = $('#instafeedNoMargins'),
            html = $wrapper.html(); // Build Html

        $wrapper.html('').append('<div class="row mx-0"></div>').find('.row').append(html);
      }
    }); // Init Instafeed No Margins

    feed.run();
  }
}).apply(this, [jQuery]);

/***/ }),

/***/ 9:
/*!********************************************************!*\
  !*** multi ./assets/js/examples/examples.instafeed.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\trikore\assets\js\examples\examples.instafeed.js */"./assets/js/examples/examples.instafeed.js");


/***/ })

/******/ });