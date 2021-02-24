$(document).ready(function(){
    let contenedorDeOpciones = $('#contenedor-de-opciones-de-busqueda');
    let cajaTodos =  $('#caja-todos');
    let cajaPorDefecto = $('#caja-apellido');
    let opciones = $('.js-selectivo');

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
        let cualquiera = true;

        opciones.each(function () {
            if ($(this).prop('checked')) {
                cualquiera = false;
            }
        });

        return cualquiera;
    }
});