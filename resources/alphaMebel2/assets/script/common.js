
$(document).ready(function () {
    $('#ourBranches').click(function () {
        $('.branches').toggleClass('active');
    });
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
});

