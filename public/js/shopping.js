$('#content').on('click', '.fa-plus', function() {
    elements = $(this).parents('.row').clone(true);
    elements.find("#amount").val(null);
    $('form[name="form-save-shopping"]').append(elements);
});

$('#content').on('click', '.fa-trash', function() {
    $(this).parents('.row').remove();
});

$('#content').on('click', '.btn-save-shopping', function() {

    $.ajax({
        url: "compras",
        type: "POST",
        data: $('form[name="form-save-shopping"]').serialize(),
        dataType: "json"

    }).done(function(request) {
    }).fail(function() {
    }).always(function() {
    });
});
