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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/examples/examples.demos.js":
/*!**********************************************!*\
  !*** ./assets/js/examples/examples.demos.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Name: 			Demos - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	7.4.0
*/
(function ($) {
  'use strict'; // Sample Demos List

  var $sampleItemList = $('#sampleItemList'),
      $window = $(window);
  $sampleItemList.on('arrangeComplete', function () {
    $sampleItemList.addClass('sample-item-list-loaded');
    $window.trigger('scroll');
  });
  $sampleItemList.isotope({
    itemSelector: '.isotope-item',
    layoutMode: 'fitRows',
    hiddenStyle: {
      opacity: 0
    },
    visibleStyle: {
      opacity: 1
    }
  }); // Main Demo

  var $mainDemoItem = $($('#mainDemo').html());
  $sampleItemList.prepend($mainDemoItem).isotope('prepended', $mainDemoItem); // Coming Soon

  var $comingSoonItem = $($('#comingSoon').html());
  $sampleItemList.append($comingSoonItem).isotope('appended', $comingSoonItem);
  setTimeout(function () {
    $sampleItemList.trigger('arrangeComplete');
  }, 1000);
  $sampleItemList.find('.owl-carousel').on('changed.owl.carousel', function (event) {
    setTimeout(function () {
      $window.trigger('scroll');
    }, 300);
  }); // Carousels

  $('.owl-carousel-demos').each(function () {
    $(this).owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      nav: true,
      dots: false,
      stagePadding: 0,
      navText: [],
      autoplay: false,
      autoplayTimeout: Math.floor(Math.random() * (12000 - 6000 + 1)) + 6000,
      rtl: $('html').attr('dir') == 'rtl' ? true : false
    }).addClass('owl-carousel-init');
    $(this).on('changed.owl.carousel', function (event) {
      $(this).find('.owl-item:eq(' + event.item.index + ')').trigger('scroll');
    });
  }); //	Open Demo Options

  $(document).on('mousedown', 'a.open-demo-options', function (e) {
    if (e.which != 2) {
      e.preventDefault();
      $.magnificPopup.open({
        items: {
          src: '#mainDemos',
          type: 'inline'
        },
        fixedContentPos: true,
        closeBtnInside: false,
        closeOnContentClick: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'mfp-demo-options mfp-fade',
        callbacks: {
          open: function open() {
            $('html').addClass('lightbox-opened');
          },
          close: function close() {
            $('html').removeClass('lightbox-opened');
          }
        }
      });
      setTimeout(function () {
        $(window).trigger('resize');
      }, 1000);
    }
  }); // Lazy Load

  $.extend(theme.PluginLazyLoad.defaults, {
    container: $('.main')
  });
}).apply(this, [jQuery]);

/***/ }),

/***/ 5:
/*!****************************************************!*\
  !*** multi ./assets/js/examples/examples.demos.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\trikore\assets\js\examples\examples.demos.js */"./assets/js/examples/examples.demos.js");


/***/ })

/******/ });