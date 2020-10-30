$(document).ready(function() {

    $('.cnpj').mask('99.999.999/9999-99');

    $('#content').on('click', '.fa-plus-circle', function() {
        $(this).removeClass().addClass('fa fa-minus-circle');
    });

    $('#content').on('click', '.fa-minus-circle', function() {
        $(this).removeClass().addClass('fa fa-plus-circle');
    });

});



