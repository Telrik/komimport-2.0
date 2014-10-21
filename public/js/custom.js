$(document).ready(function () {

    // GOOGLE MAP

    /*$("#map-block").height($("#map-wrapper").height());	// Set Map Height
     function initialize($) {
     var mapOptions = {
     zoom: 13,
     center: new google.maps.LatLng(55.705046, 37.622939),
     disableDefaultUI: true
     };
     var map = new google.maps.Map(document.getElementById('map-block'), mapOptions);
     }
     google.maps.event.addDomListener(window, 'load', initialize);
     */

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

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $('.order_tech').click(function (e) {
        var modal = $(this).parents('div.modal');
        var email = modal.find('input[name=email]').val();
        var id = modal.find('input[name=tech_id]').val();

        if (!IsEmail(email)) {
            alert('Email is not valid');
            return;
        }

        $.ajax({
            url: 'http://partist.ru/connector.php?type=save_cart&email=' + email + '&position_tech[' + id + ']=1',
            dataType: 'json',
            type: 'get',
            success: function (data) {

                modal.modal('hide');
                alert('Ваша заявка успешно отправлена');

                if (typeof data.data != 'undefined' && typeof data.result != 'undefined') {

                }
                else {

                }
            },
            error: function (data) {
                if (typeof data.data != 'undefined' && typeof data.result != 'undefined') {
                } else {
                }
            }
        });


        //zzz = $(this);
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


