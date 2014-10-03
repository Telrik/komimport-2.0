$(document).ready(function () {

    Shadowbox.init({
            continuous: true,
            onFinish: function () {
                $("#sb-body-inner").unbind('click');
                $("#sb-body-inner").click(function (e) {
                    Shadowbox.next();
                });
            }
        }
    );
    /*
     $('.images-block').magnificPopup({
     delegate: 'a',
     type: 'image',
     gallery: {
     enabled: true
     }
     });*/
//    $('body').popover({
//        selector: '.readmore'
    //});
    //$('a.readmore').
    //$(document).popover({selector: 'a.readmore', trigger: 'click focus', placement: 'auto top', container: 'body'});

    // TABS
    $('.nav-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // TOOLTIP
    $(".header-links .fa, .tool-tip").tooltip({
        placement: "bottom"
    });
    $(".btn-wishlist, .btn-compare, .display .fa").tooltip('hide');
    $(document).tooltip({selector: 'a.btn-wishlist'});

    function setReadmore() {
        //Shadowbox.setup('a[rel=shadowbox]');
        //  $('a.btn-wishlist').tooltip();
        /*$('div.product-col div.description').readmore({
         speed: 75,
         maxHeight: 65,
         lessLink: '<a class="readmore" href="#"><i class="fa fa-chevron-up"></i> <i class="fa fa-chevron-up"></i></a>',
         moreLink: '<a class="readless" href="#"><i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-down"></i></a>'
         });*/
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
})(jQuery);


