$(document).ready(function () {
    $('.navbar-nav > li').hoverIntent(function () {
            $(this).siblings('ul').slideUp(300);
            $(this).find('ul').slideDown(300);
        },
        function () {
            $(this).find('ul').slideUp(300);
        });
});