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
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/examples/examples.forms.js":
/*!**********************************************!*\
  !*** ./assets/js/examples/examples.forms.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
Name: 			Forms
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	7.4.0
*/
(function ($) {
  'use strict';
  /*
  Custom Rules
  */
  // No White Space

  $.validator.addMethod("noSpace", function (value, element) {
    if ($(element).attr('required')) {
      return value.search(/[a-zA-Z0-9À-žа-яА-ЯёЁα-ωΑ-Ω\s\u0621-\u064A\u0660-\u0669 ]/i) == 0;
    }

    return true;
  }, 'Please fill this empty field.');
  /*
  Assign Custom Rules on Fields
  */

  $.validator.addClassRules({
    'form-control': {
      noSpace: true
    }
  });
  /*
  Contact Form: Basic
  */

  $('.contact-form').each(function () {
    $(this).validate({
      submitHandler: function submitHandler(form) {
        var $form = $(form),
            $messageSuccess = $form.find('.contact-form-success'),
            $messageError = $form.find('.contact-form-error'),
            $submitButton = $(this.submitButton),
            $errorMessage = $form.find('.mail-error-message'),
            submitButtonText = $submitButton.val();
        $submitButton.val($submitButton.data('loading-text') ? $submitButton.data('loading-text') : 'Loading...').attr('disabled', true); // Fields Data

        var formData = $form.serializeArray(),
            data = {};
        $(formData).each(function (index, obj) {
          data[obj.name] = obj.value;
        }); // Google Recaptcha v2

        if (data["g-recaptcha-response"] != undefined) {
          data["g-recaptcha-response"] = $form.find('#g-recaptcha-response').val();
        } // Ajax Submit


        $.ajax({
          type: 'POST',
          url: $form.attr('action'),
          data: data
        }).always(function (data, textStatus, jqXHR) {
          $errorMessage.empty().hide();

          if (data.response == 'success') {
            // Uncomment the code below to redirect for a thank you page
            // self.location = 'thank-you.html';
            $messageSuccess.removeClass('d-none');
            $messageError.addClass('d-none'); // Reset Form

            $form.find('.form-control').val('').blur().parent().removeClass('has-success').removeClass('has-danger').find('label.error').remove();

            if ($messageSuccess.offset().top - 80 < $(window).scrollTop()) {
              $('html, body').animate({
                scrollTop: $messageSuccess.offset().top - 80
              }, 300);
            }

            $form.find('.form-control').removeClass('error');
            $submitButton.val(submitButtonText).attr('disabled', false);
            return;
          } else if (data.response == 'error' && typeof data.errorMessage !== 'undefined') {
            $errorMessage.html(data.errorMessage).show();
          } else {
            $errorMessage.html(data.responseText).show();
          }

          $messageError.removeClass('d-none');
          $messageSuccess.addClass('d-none');

          if ($messageError.offset().top - 80 < $(window).scrollTop()) {
            $('html, body').animate({
              scrollTop: $messageError.offset().top - 80
            }, 300);
          }

          $form.find('.has-success').removeClass('has-success');
          $submitButton.val(submitButtonText).attr('disabled', false);
        });
      }
    });
  });
  /*
  Contact Form: Advanced
  */

  $('#contactFormAdvanced').validate({
    onkeyup: false,
    onclick: false,
    onfocusout: false,
    rules: {
      'captcha': {
        captcha: true
      },
      'checkboxes[]': {
        required: true
      },
      'radios': {
        required: true
      }
    },
    errorPlacement: function errorPlacement(error, element) {
      if (element.attr('type') == 'radio' || element.attr('type') == 'checkbox') {
        error.appendTo(element.closest('.form-group'));
      } else {
        error.insertAfter(element);
      }
    }
  });
  /*
  Contact Form: reCaptcha v3
  */

  $('.contact-form-recaptcha-v3').each(function () {
    $(this).validate({
      submitHandler: function submitHandler(form) {
        var $form = $(form),
            $messageSuccess = $form.find('.contact-form-success'),
            $messageError = $form.find('.contact-form-error'),
            $submitButton = $(this.submitButton),
            $errorMessage = $form.find('.mail-error-message'),
            submitButtonText = $submitButton.val();
        $submitButton.val($submitButton.data('loading-text') ? $submitButton.data('loading-text') : 'Loading...').attr('disabled', true);
        var site_key = $('#google-recaptcha-v3').attr('src').split("render=")[1];
        grecaptcha.execute(site_key, {
          action: 'contact_us'
        }).then(function (token) {
          // Fields Data
          var formData = $form.serializeArray(),
              data = {};
          $(formData).each(function (index, obj) {
            data[obj.name] = obj.value;
          }); // Recaptcha v3 Token

          data["g-recaptcha-response"] = token; // Ajax Submit

          $.ajax({
            type: 'POST',
            url: $form.attr('action'),
            data: data
          }).always(function (data, textStatus, jqXHR) {
            $errorMessage.empty().hide();

            if (data.response == 'success') {
              // Uncomment the code below to redirect for a thank you page
              // self.location = 'thank-you.html';
              $messageSuccess.removeClass('d-none');
              $messageError.addClass('d-none'); // Reset Form

              $form.find('.form-control').val('').blur().parent().removeClass('has-success').removeClass('has-danger').find('label.error').remove();

              if ($messageSuccess.offset().top - 80 < $(window).scrollTop()) {
                $('html, body').animate({
                  scrollTop: $messageSuccess.offset().top - 80
                }, 300);
              }

              $form.find('.form-control').removeClass('error');
              $submitButton.val(submitButtonText).attr('disabled', false);
              return;
            } else if (data.response == 'error' && typeof data.errorMessage !== 'undefined') {
              $errorMessage.html(data.errorMessage).show();
            } else {
              $errorMessage.html(data.responseText).show();
            }

            $messageError.removeClass('d-none');
            $messageSuccess.addClass('d-none');

            if ($messageError.offset().top - 80 < $(window).scrollTop()) {
              $('html, body').animate({
                scrollTop: $messageError.offset().top - 80
              }, 300);
            }

            $form.find('.has-success').removeClass('has-success');
            $submitButton.val(submitButtonText).attr('disabled', false);
          });
        });
      }
    });
  });
}).apply(this, [jQuery]);

/***/ }),

/***/ 6:
/*!****************************************************!*\
  !*** multi ./assets/js/examples/examples.forms.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\trikore\assets\js\examples\examples.forms.js */"./assets/js/examples/examples.forms.js");


/***/ })

/******/ });