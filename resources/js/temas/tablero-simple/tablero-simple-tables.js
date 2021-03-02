$(document).ready(function(){
    $('.tabla-presionable').on('click', 'tbody > tr', function () {
        window.location = $(this).data('href');
    });

    $('.tabla-ordenable').on('click', 'thead th', function () {
        let currentUrl = new URL($(location).attr('href'));
        let campo = $(this).data('ordenado-por');
        let orden = $(this).hasClass('asc') ? 'desc' : 'asc';
        currentUrl.searchParams.set("ordenadoPor", campo);
        currentUrl.searchParams.set("orden", orden);
        if (!currentUrl.searchParams.get('consulta') && $('#consulta').val() !== '') currentUrl.searchParams.set("consulta", $('#consulta').val());
        let newUrl = currentUrl.href;

        window.location = newUrl;
    });;
});