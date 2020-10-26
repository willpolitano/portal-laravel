$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

$('.link-menu').on('click', function() {
    $('.link-menu.active').removeClass('active');
    $(this).addClass('active');
});
