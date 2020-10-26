$('#content').on('click', '#view-product', function() {

    var name = $(this).closest('tr').find('td').eq(0).text();
    var description = $(this).closest('tr').find('td').eq(1).text();
    var price = $(this).closest('tr').find('td').eq(2).text();

    $('#modal-view-product').find("input[name='name']").val(name);
    $('#modal-view-product').find("input[name='price']").val(price);
    $('#modal-view-product').find("textarea[name='description']").html(description);
    $('#modal-view-product').modal('show');
});

$('#content').on('click', '#edit-product', function() {

    var idProduct = $(this).attr('data-id');
    var name = $(this).closest('tr').find('td').eq(0).text();
    var price = $(this).closest('tr').find('td').eq(2).text();
    var description = $(this).closest('tr').find('td').eq(1).text();

    $('#modal-edit-product').find("input[name='idProduct']").val(idProduct);
    $('#modal-edit-product').find("input[name='name']").val(name);
    $('#modal-edit-product').find("input[name='price']").val(price);
    $('#modal-edit-product').find("textarea[name='description']").html(description);
    $('#modal-edit-product').modal('show');
});

$('#content').on('click', '.btn-update-product', function() {

    var idProduct = $('#modal-edit-product').find("input[name='idProduct']").val();

    $.ajax({
        url: "produtos/" + idProduct,
        type: "PUT",
        data: $('form[name="form-update-product"]').serialize(),
        dataType: "json"

    }).done(function(request) {
        $('#modal-edit-product').modal('hide');
        closeModal();
    }).fail(function() {
    }).always(function() {
    });
});

$('#content').on('click', '#delete-product', function() {

    var idProduct = $(this).attr('data-id');

    $('#modal-delete-product').find("input[name='idProduct']").val(idProduct);

    $('#modal-delete-product').modal('show');
});

$('#content').on('click', '.btn-delete-product', function() {

    var idProduct = $('#modal-delete-product').find("input[name='idProduct']").val();

    $.ajax({
        url: "produtos/" + idProduct,
        type: "DELETE",
        data: $('form[name="form-delete-product"]').serialize(),
        dataType: "json"

    }).done(function(request) {
        $('#modal-delete-product').modal('hide');
        closeModal();
    }).fail(function() {
    }).always(function() {
    });
});

$('#content').on('click', '.btn-save-product', function() {

    $.ajax({
        url: "produtos",
        type: "POST",
        data: $('form[name="form-include-product"]').serialize(),
        dataType: "json"

    }).done(function(request) {
        $('#modal-include-product').modal('hide');
        closeModal();
    }).fail(function() {
    }).always(function() {
    });
});

function closeModal() {
    var url = window.location.href;
    window.location.href = url;
}
