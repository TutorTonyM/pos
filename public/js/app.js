(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
window.popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js");

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

__webpack_require__(/*! ./boton-pantalla-completa */ "./resources/js/boton-pantalla-completa.js");

/***/ }),

/***/ "./resources/js/boton-pantalla-completa.js":
/*!*************************************************!*\
  !*** ./resources/js/boton-pantalla-completa.js ***!
  \*************************************************/
/***/ (() => {

$(document).ready(function () {
  alternarPantallaCompleta();

  function alternarPantallaCompleta() {
    var boton = $('#full-screen-button');
    boton.click(function () {
      var expandido = $(this).data('expandido');

      if (expandido) {
        cerrarPantallaCompleta(boton);
        $(this).data('expandido', false);
      } else {
        lanzarPantallaCompleta(boton);
        $(this).data('expandido', true);
      }
    });
  }

  function lanzarPantallaCompleta(boton) {
    var elemento = document.documentElement;
    var texto = boton.data('colapsar');
    var icono = boton.find('.fa');
    var span = boton.find('span');

    if (elemento.requestFullscreen) {
      elemento.requestFullscreen();
    } else if (elemento.mozRequestFullScreen) {
      elemento.mozRequestFullScreen();
    } else if (elemento.webkitRequestFullscreen) {
      elemento.webkitRequestFullscreen();
    } else if (elemento.msRequestFullscreen) {
      elemento.msRequestFullscreen();
    }

    icono.removeClass('fa-expand-arrows-alt');
    icono.addClass('fa-compress-arrows-alt');
    span.text(texto);
  }

  function cerrarPantallaCompleta(boton) {
    var texto = boton.data('expander');
    var icono = boton.find('.fa');
    var span = boton.find('span');

    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    }

    icono.removeClass('fa-compress-arrows-alt');
    icono.addClass('fa-expand-arrows-alt');
    span.text(texto);
  }
});

/***/ }),

/***/ "./resources/scss/vendor.scss":
/*!************************************!*\
  !*** ./resources/scss/vendor.scss ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n   ╷\n14 │ @import 'temas/tablero-simple/tablero-simple-central';\r\n   │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n   ╵\n  C:\\wamp\\www\\pos\\resources\\scss\\app.scss 14:9  root stylesheet\n    at processResult (C:\\wamp\\www\\pos\\node_modules\\webpack\\lib\\NormalModule.js:598:19)\n    at C:\\wamp\\www\\pos\\node_modules\\webpack\\lib\\NormalModule.js:692:5\n    at C:\\wamp\\www\\pos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\wamp\\www\\pos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\wamp\\www\\pos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\wamp\\www\\pos\\node_modules\\sass-loader\\dist\\index.js:73:7\n    at Function.call$2 (C:\\wamp\\www\\pos\\node_modules\\sass\\sass.dart.js:91717:16)\n    at _render_closure1.call$2 (C:\\wamp\\www\\pos\\node_modules\\sass\\sass.dart.js:80362:12)\n    at _RootZone.runBinary$3$3 (C:\\wamp\\www\\pos\\node_modules\\sass\\sass.dart.js:27258:18)\n    at _FutureListener.handleError$1 (C:\\wamp\\www\\pos\\node_modules\\sass\\sass.dart.js:25786:19)");

/***/ })

},
0,[["./resources/js/app.js","/js/manifest","/js/vendor"],["./resources/scss/vendor.scss","/js/manifest","/js/vendor"],["./resources/scss/app.scss","/js/manifest","/js/vendor"]]]);