$(document).ready(function () {
    $("#stocks-carousel").owlCarousel({
        items: 3,
        dots: true,
        loop: true,
        autoplay: false,
        smartSpeed: 1000,
        nav: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            320: {
                items: 1,
            },
            576: {
                items: 2,
            },
            760: {
                items: 3,
            }
        }
    });
});
$(document).ready(function () {
    $("#feedbacks-carousel").owlCarousel({
        items: 4,
        dots: true,
        loop: false,
        autoplay: false,
        smartSpeed: 1000,
        nav: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            320: {
                items: 1,
            },
            700: {
                items: 2,
            },
            960: {
                items: 3,
            },
            1400: {
                items: 4,
            }
        }
    });
});

$(document).ready(function () {
    $(".shopscarousel").owlCarousel({
        items: 1,
        dots: false,
        loop: false,
        autoplay: false,
        smartSpeed: 1000,
        nav: true,
        mouseDrag: true,
        touchDrag: true
    });
});