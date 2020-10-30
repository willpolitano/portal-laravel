$(document).ready(function() {

    $('.cnpj').mask('99.999.999/9999-99');

    $('.fa-plus-circle').click(function() {
        $(this).removeClass().addClass('fa fa-minus-circle');
    });

    $('.fa-minus-circle').click(function() {
        $(this).removeClass().addClass('fa fa-plus-circle');
    });

});



