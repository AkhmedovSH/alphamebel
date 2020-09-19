$(document).ready(function () {
    $(".goodinnercarousel").owlCarousel({
        items: 2,
        dots: false,
        loop: true,
        autoplay: false,
        smartSpeed: 1000,
        nav: true,
        mouseDrag: true,
        responsive: {
            200: {
                items: 1,
                nav: false,
                autoplay: true,
                autoplayTimeout: 2000,
                loop: true
            },
            700: {
                items: 2,
            }
        }
    });
});

$(document).ready(function () {
    $('#ourBranches').click(function () {
        $('.branches').toggleClass('active');
    });

    if(localStorage.getItem('callmake') == 'false') {
        $( ".callmake" ).css("display","none");
    }
});

$(document).ready(function () {
    $('#catalogueMobile').click(function () {
        $('.product-navigation__list').toggleClass('active');
        $(".alpha-navigation").toggleClass('catalogue-clicked');
        $(".alpha-navigation__list").toggleClass('catalogue-clicked');
    });
});

$(document).ready(function () {
    $('.mobile-menu-open-button').click(function () {
        $('.alpha-navigation').css("display", "flex");
        $('.product-navigation').css("display", "block");
        $('.mobile-menu-close-button').css("display", "flex");
        $('.brand-navigation__branches').css("display", "block");
    });
});
$(document).ready(function () {
    $('.mobile-menu-close-button').click(function () {
        $('.alpha-navigation').css("display", "none");
        $('.product-navigation').css("display", "none");
        $('.mobile-menu-close-button').css("display", "none");
        $('.brand-navigation__branches').css("display", "none");
    });
});
$(document).ready(function () {
    $('.callmake-close').click(function () {
        $('.callmake').css("display", "none");
    });
});

$(document).ready(function () {
    $('#buyersMenuOpen').click(function () {
        $('.buyers-footer-link').toggleClass("opened");
    });
});
$(document).ready(function () {
    $('#partnersMenuOpen').click(function () {
        $('.partners-footer-link').toggleClass("opened");
    });
});
$(document).ready(function () {
    $('#contactsMenuOpen').click(function () {
        $('.contacts-footer-link').toggleClass("opened");
    });
});
$(document).ready(function () {
    $('.recall').click(function () {
        $('#callmakeitem').toggleClass("active");
        $('#callmakeitembtn').toggleClass("active");
    });
});


$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            $('#to-top').css("display", "flex");
        }
        else {
            $('#to-top').css("display", "none");
        }
    });
});

/*--------------- COLLECTION AND SINGLE-GOOD -----------------*/



$(document).ready(function () {
    $('.filterOpen').click(function () {
        $(this).siblings('#filterContent').toggleClass('active');
        $(this).toggleClass('clicked');
    });
});





/*--------------- GOODS ADD TO BASKET-----------------*/



$(document).ready(function () {
    $('.add').click(function () {
        $('#addedToBasket').addClass('opened');
    });
    $('.addedItemClose').click(function () {
        $('#addedToBasket').removeClass('opened');
    });
    $('#addedToBasket').click(function () {
        $('#addedToBasket').removeClass('opened');
    });
});


let windowwidth = $(window).width();

if (windowwidth > 768) {
    $('.goodscard').mouseenter(function () {
        $(this).addClass('active');
    });

    $('.goodscard').mouseleave(function () {
        $(this).removeClass('active');
    });
}


$('.sub-img img').map((index, item) => {
    $(item).on('click', x => {
        let src = $(item).attr('src');
        $(item).parent().parent().prev('.card_main').children('img').attr('src', src);
    })
});

$('.mainslider-sub-img img').map((index, item) => {
    $(item).on('click', x => {
        let src = $(item).attr('src');
        $('.mainslider-card_main').children('img').attr('src', src);
    })
});

$(document).ready(function () {
    $(".collectioncarousel").owlCarousel({
        items: 4,
        dots: false,
        loop: false,
        autoplay: false,
        smartSpeed: 1000,
        nav: true,
        mouseDrag: false,
        responsive: {
            250: {
                items: 3,
            },
            600: {
                items: 4,
            }
        }
    });
});
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1,
        nav: true,
    });
});



$(document).ready(function () {
    $('.mainslider-card_main').click(function () {
        $(this).parent('.img').toggleClass("active");
    });
    $('.close').click(function () {
        $(this).parent('.img').removeClass("active");
    });
});


/*--------------- GOODS FILTER -----------------*/

$('.filteropentitle').click(function () {
    $(this).siblings('.list').toggleClass('active');
    $(this).toggleClass('opened');
});

/*--------------- SALE -----------------*/

$(document).ready(function () {
    $('.sales-single-filter-open').click(function () {
        $('.single-filter-list').toggleClass('active');
        $('.sales-single-filter-open').toggleClass('opened');
    });
    $('.sale-list-open').click(function () {
        $('.sale-list').toggleClass('active');
        $('.sale-list-open').toggleClass('opened');
    });
});


/*--------------- GOODS PHOTO SELECTOR -----------------*/

$('.img_markers img').map((index, item) => {
    $(item).on('click', x => {
        let src = $(item).attr('src');
        $(item).parent().prev('.card_main').children('img').attr('src', src);
    })
});

/*--------------- OURSHOPS PHOTO SELECTOR -----------------*/

$(document).ready(function () {
    $('.shop-close').click(function () {
        $(this).parent().siblings('.aboutshop').toggleClass("active");
        $(this).toggleClass('clicked')
    });
});

/*--------------- NON STANDART MATTRESS -----------------*/

$(document).ready(function () {
    $('.nonstandart-title').click(function () {
        $('.nonstandart-content').toggleClass('active');
    });

    $(".callmake-close").click(function(){
        localStorage.setItem('callmake', false)
    });
});

