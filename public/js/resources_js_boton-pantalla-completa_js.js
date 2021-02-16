(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_boton-pantalla-completa_js"],{

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

/***/ })

}]);