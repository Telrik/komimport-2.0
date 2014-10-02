$(document).ready(function () {

    Shadowbox.init();

    $('.images-block').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    function setReadmore() {
        Shadowbox.setup('a[rel=shadowbox]');

        $('div.product-col div.description').readmore({
            speed: 75,
            maxHeight: 120,
            lessLink: '<a class="readmore" href="#"><i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-up"></i></a>',
            moreLink: '<a class="readless" href="#"><i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-down"></i></a>'
        });
    }

    $('#carousel-offers').on('slid.bs.carousel', function () {
        setReadmore();
    });

    $('#carousel-offers-special').on('slid.bs.carousel', function () {
        setReadmore();
    });

    setReadmore();
});

(function ($) {
    "use strict";

    // TOOLTIP
    $(".header-links .fa, .tool-tip").tooltip({
        placement: "bottom"
    });
    $(".btn-wishlist, .btn-compare, .display .fa").tooltip('hide');

    // TABS
    $('.nav-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
})(jQuery);


