//apresentar/ocultar menu
$(document).ready(function(){
    $('.sidebar-toggle').on('click', function (){
        $('.sidebar').toggleClass('toggled');
    });
});

//carregar aberto o submenu
var active = $('.sidebar .active');
if (active.lenght && active.parent('.collapse').lenght) {
    var parent = active.parent('.collapse');

    parent.prev('a').attr('aria-expanded', true);
    parent.addClass('show');
}