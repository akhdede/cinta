$(function() {
    $('.menu li > a').on('click', function(e) {
        $('.menu ul ul').slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),e.stopPropagation()
    });

    $(window).bind("load resize", function() {
        if ($(this).width() < 768) {
            $('li.logout').show();
            $('.navbar .logout').hide();
            $('.small-brand').hide();
            $('.navbar-collapse').addClass('collapse');
        } else {
            $('.navbar-collapse').removeClass('collapse');
            $('.navbar .logout').show();
            $('.small-brand').show();
        }
        
    });
})

