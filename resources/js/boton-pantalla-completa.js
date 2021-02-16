$(document).ready(function(){
    alternarPantallaCompleta();

    function alternarPantallaCompleta(){
        let boton = $('#full-screen-button');
        boton.click(function () {
            let expandido = $(this).data('expandido');
            if (expandido) {
                cerrarPantallaCompleta(boton);
                $(this).data('expandido', false);
            }
            else{
                lanzarPantallaCompleta(boton);
                $(this).data('expandido', true);
            }
        });
    }

    function lanzarPantallaCompleta(boton) {
        let elemento = document.documentElement;
        let texto = boton.data('colapsar');
        let icono = boton.find('.fa');
        let span = boton.find('span');
        
        if(elemento.requestFullscreen) {
            elemento.requestFullscreen();
        } else if(elemento.mozRequestFullScreen) {
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
        let texto = boton.data('expander');
        let icono = boton.find('.fa');
        let span = boton.find('span');

        if(document.exitFullscreen) {
            document.exitFullscreen();
        } else if(document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if(document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }

        icono.removeClass('fa-compress-arrows-alt');
        icono.addClass('fa-expand-arrows-alt');

        span.text(texto);
    }
});