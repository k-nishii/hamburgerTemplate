(function($) {
    $(function () {
        $('.sub-menu').on({
            'mouseenter': function () {
                $(this).addClass('is-active');
            },
            'mouseleave': function () {
                $(this).removeClass('is-active');
            }
        });
        $('#headMenu,#closeBtn').on('click', function() {
            $('body').toggleClass('open');
        });

    });
  })(jQuery);