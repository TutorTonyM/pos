$(document).ready(function(){
    desplegablesEnBarraDecontrol();

    function desplegablesEnBarraDecontrol() {
        // $('#barra-de-control').on('click', '.desplegable', function () {
        //     $(this).siblings('.desplegable').removeClass('activo');
        //     $(this).toggleClass('activo');
        // });

        $(document).click(function (event) {
            if ($(event.target).hasClass('desplegable')) {
                $(event.target).siblings('.desplegable').removeClass('activo');
                $(event.target).toggleClass('activo');
            }
            else if($(event.target).parents('.desplegable').length > 0){
                $(event.target).closest('.desplegable').siblings('.desplegable').removeClass('activo');
                $(event.target).closest('.desplegable').toggleClass('activo');
            }
            else{
                $('#barra-de-control').children('.desplegable').removeClass('activo');
            }
        });
    }
});