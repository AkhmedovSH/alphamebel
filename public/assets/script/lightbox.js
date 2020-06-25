
jQuery(document).ready(function ($) {
    var current, size;
    $('.lightboxTrigger').click(function (e) {
        e.preventDefault();
        var image_href = $(this).attr("href");
        var slideNum = $('.lightboxTrigger').index(this);
        if ($('#lightbox').length > 0) {
            $('#lightbox').fadeIn(300);
        } else {
            var lightbox =
                '<div id="lightbox">' +
                '<p></p>' +
                '<div id="slideshow">' +
                '</div>' +
                '</div>';

            $('body').append(lightbox);

            $('.imageSet').find('.lightboxTrigger').each(function () {
                var $href = $(this).attr('href');
                $('#slideshow').append(
                    '<img src="' + $href + '">'
                );
            });

        }

        size = $('#slideshow img').length;

        $('#slideshow img').hide();
        $('#slideshow img:eq(' + slideNum + ')').show();

        current = slideNum;
    });

    $('body').on('click', '#lightbox', function () {
        $('#lightbox').fadeOut(300);
    });

    $('body').on('click', '.slide-nav', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var dest;

        $('#slideshow img:eq(' + current + ')').fadeOut(100);
        $('#slideshow img:eq(' + dest + ')').fadeIn(100);

        current = dest;
    });

});