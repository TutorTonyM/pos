(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

window.$ = window.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
window.popper = __webpack_require__(/*! popper.js */ "./node_modules/popper.js/dist/esm/popper.js");

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

__webpack_require__(/*! ./temas/tablero-simple/tablero-simple-barra-de-control */ "./resources/js/temas/tablero-simple/tablero-simple-barra-de-control.js");

__webpack_require__(/*! ./temas/tablero-simple/tablero-simple-tables */ "./resources/js/temas/tablero-simple/tablero-simple-tables.js");

__webpack_require__(/*! ./temas/tablero-simple/tablero-simple-filtros */ "./resources/js/temas/tablero-simple/tablero-simple-filtros.js");

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

/***/ "./resources/js/temas/tablero-simple/tablero-simple-barra-de-control.js":
/*!******************************************************************************!*\
  !*** ./resources/js/temas/tablero-simple/tablero-simple-barra-de-control.js ***!
  \******************************************************************************/
/***/ (() => {

$(document).ready(function () {
  alternadorDeBarraDeControl();
  desplegablesEnBarraDecontrol();

  function alternadorDeBarraDeControl() {
    $('#contenedor-de-alternador').click(function () {
      $(this).closest('#barra-de-control').toggleClass('expandido');
    });
  }

  function desplegablesEnBarraDecontrol() {
    // $('#barra-de-control').on('click', '.desplegable', function () {
    //     $(this).siblings('.desplegable').removeClass('activo');
    //     $(this).toggleClass('activo');
    // });
    $(document).click(function (event) {
      if ($(event.target).hasClass('desplegable')) {
        $(event.target).siblings('.desplegable').removeClass('activo');
        $(event.target).toggleClass('activo');
      } else if ($(event.target).parents('.desplegable').length > 0) {
        $(event.target).closest('.desplegable').siblings('.desplegable').removeClass('activo');
        $(event.target).closest('.desplegable').toggleClass('activo');
      } else {
        $('#barra-de-control').children('.desplegable').removeClass('activo');
      }
    });
  }
});

/***/ }),

/***/ "./resources/js/temas/tablero-simple/tablero-simple-filtros.js":
/*!*********************************************************************!*\
  !*** ./resources/js/temas/tablero-simple/tablero-simple-filtros.js ***!
  \*********************************************************************/
/***/ (() => {

$(document).ready(function () {
  var contenedorDeOpciones = $('#contenedor-de-opciones-de-busqueda');
  var cajaTodos = $('#caja-todos');
  var cajaPorDefecto = $('#caja-apellido');
  var opciones = $('.js-selectivo');
  $('#alternador-de-opciones-de-busqueda').click(function (event) {
    event.preventDefault();
    $(this).find('i.fa').toggleClass('fa-caret-up fa-caret-down');
    contenedorDeOpciones.slideToggle();
  });
  cajaTodos.click(function () {
    opciones.prop('checked', $(this).prop('checked'));
    cajaPorDefecto.prop('checked', true);
  });
  contenedorDeOpciones.on('change', '.js-selectivo', function () {
    if (!$(this).prop('checked')) cajaTodos.prop('checked', false);
    if (nadaSelectionado()) cajaPorDefecto.prop('checked', true);
  });

  function nadaSelectionado() {
    var cualquiera = true;
    opciones.each(function () {
      if ($(this).prop('checked')) {
        cualquiera = false;
      }
    });
    return cualquiera;
  }
});

/***/ }),

/***/ "./resources/js/temas/tablero-simple/tablero-simple-tables.js":
/*!********************************************************************!*\
  !*** ./resources/js/temas/tablero-simple/tablero-simple-tables.js ***!
  \********************************************************************/
/***/ (() => {

$(document).ready(function () {
  $('.tabla-presionable').on('click', 'tr', function () {
    window.location = $(this).data('href');
  });
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
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
0,[["./resources/js/app.js","/js/manifest","/js/vendor"],["./resources/scss/vendor.scss","/js/manifest","/js/vendor"],["./resources/scss/app.scss","/js/manifest","/js/vendor"]]]);