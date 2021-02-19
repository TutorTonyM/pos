$(document).ready(function(){
    $('.tabla-presionable').on('click', 'tr', function () {
        window.location = $(this).data('href');
    });
});