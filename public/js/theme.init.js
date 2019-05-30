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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/theme.init.js":
/*!*********************************!*\
  !*** ./assets/js/theme.init.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Commom Plugins
(function ($) {
  'use strict'; // Scroll to Top Button.

  if (typeof theme.PluginScrollToTop !== 'undefined') {
    theme.PluginScrollToTop.initialize();
  } // Tooltips


  if ($.isFunction($.fn['tooltip'])) {
    $('[data-tooltip]:not(.manual), [data-plugin-tooltip]:not(.manual)').tooltip();
  } // Popover


  if ($.isFunction($.fn['popover'])) {
    $(function () {
      $('[data-plugin-popover]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.popover(opts);
      });
    });
  } // Validations


  if (typeof theme.PluginValidation !== 'undefined') {
    theme.PluginValidation.initialize();
  } // Match Height


  if ($.isFunction($.fn['matchHeight'])) {
    $('.match-height').matchHeight(); // Featured Boxes

    $('.featured-boxes .featured-box').matchHeight(); // Featured Box Full

    $('.featured-box-full').matchHeight();
  }
}).apply(this, [jQuery]); // Animate

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginAnimate'])) {
    $(function () {
      $('[data-appear-animation]').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginAnimate(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Before / After

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginBeforeAfter'])) {
    $(function () {
      $('[data-plugin-before-after]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginBeforeAfter(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Carousel

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginCarousel'])) {
    $(function () {
      $('[data-plugin-carousel]:not(.manual), .owl-carousel:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginCarousel(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Chart.Circular

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginChartCircular'])) {
    $(function () {
      $('[data-plugin-chart-circular]:not(.manual), .circular-bar-chart:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginChartCircular(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Countdown

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginCountdown'])) {
    $(function () {
      $('[data-plugin-countdown]:not(.manual), .countdown').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginCountdown(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Counter

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginCounter'])) {
    $(function () {
      $('[data-plugin-counter]:not(.manual), .counters [data-to]').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginCounter(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Float Element

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginFloatElement'])) {
    $(function () {
      $('[data-plugin-float-element]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginFloatElement(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Animated Icon

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginIcon'])) {
    $(document).ready(function () {
      $(function () {
        $('[data-icon]:not(.svg-inline--fa)').each(function () {
          var $this = $(this),
              opts;
          var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
          if (pluginOptions) opts = pluginOptions;
          $this.themePluginIcon(opts);
        });
      });
    });
  }
}).apply(this, [jQuery]); // Lazy Load

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginLazyLoad'])) {
    $(function () {
      $('[data-plugin-lazyload]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginLazyLoad(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Lightbox

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginLightbox'])) {
    $(function () {
      $('[data-plugin-lightbox]:not(.manual), .lightbox:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginLightbox(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Masonry

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginMasonry'])) {
    $(function () {
      $('[data-plugin-masonry]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginMasonry(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Match Height

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginMatchHeight'])) {
    $(function () {
      $('[data-plugin-match-height]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginMatchHeight(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Parallax

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginParallax'])) {
    $(function () {
      $('[data-plugin-parallax]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginParallax(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Progress Bar

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginProgressBar'])) {
    $(function () {
      $('[data-plugin-progress-bar]:not(.manual), [data-appear-progress-animation]').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginProgressBar(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Revolution Slider

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginRevolutionSlider'])) {
    $(function () {
      $('[data-plugin-revolution-slider]:not(.manual), .slider-container .slider:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginRevolutionSlider(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Scrollable

(function ($) {
  'use strict';

  if ($.isFunction($.fn['nanoScroller'])) {
    $(function () {
      $('[data-plugin-scrollable]').each(function () {
        var $this = $(this),
            opts = {};
        var pluginOptions = $this.data('plugin-options');

        if (pluginOptions) {
          opts = pluginOptions;
        }

        $this.themePluginScrollable(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Section Scroll

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginSectionScroll'])) {
    $(function () {
      $('[data-plugin-section-scroll]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginSectionScroll(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Sort

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginSort'])) {
    $(function () {
      $('[data-plugin-sort]:not(.manual), .sort-source:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginSort(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Star Rating

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginStarRating'])) {
    $(function () {
      $('[data-plugin-star-rating]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginStarRating(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Sticky

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginSticky'])) {
    $(function () {
      $('[data-plugin-sticky]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginSticky(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Toggle

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginToggle'])) {
    $(function () {
      $('[data-plugin-toggle]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginToggle(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Tweets

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginTweets'])) {
    $(function () {
      $('[data-plugin-tweets]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginTweets(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Video Background

(function ($) {
  'use strict';

  if ($.isFunction($.fn['themePluginVideoBackground'])) {
    $(function () {
      $('[data-plugin-video-background]:not(.manual)').each(function () {
        var $this = $(this),
            opts;
        var pluginOptions = theme.fn.getOptions($this.data('plugin-options'));
        if (pluginOptions) opts = pluginOptions;
        $this.themePluginVideoBackground(opts);
      });
    });
  }
}).apply(this, [jQuery]); // Commom Partials

(function ($) {
  'use strict'; // Sticky Header

  if (typeof theme.StickyHeader !== 'undefined') {
    theme.StickyHeader.initialize();
  } // Nav Menu


  if (typeof theme.Nav !== 'undefined') {
    theme.Nav.initialize();
  } // Search


  if (typeof theme.Search !== 'undefined') {
    theme.Search.initialize();
  } // Newsletter


  if (typeof theme.Newsletter !== 'undefined') {
    theme.Newsletter.initialize();
  } // Account


  if (typeof theme.Account !== 'undefined') {
    theme.Account.initialize();
  }
}).apply(this, [jQuery]);

/***/ }),

/***/ 2:
/*!***************************************!*\
  !*** multi ./assets/js/theme.init.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\trikore\assets\js\theme.init.js */"./assets/js/theme.init.js");


/***/ })

/******/ });