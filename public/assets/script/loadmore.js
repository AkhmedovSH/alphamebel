$(document).ready(function () {
    $(".moreBox").slice(0, 3).show();
    if ($(".blogBox:hidden").length != 0) {
        $("#loadMore").show();
    }
    $("#loadMore").on("click", function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 2).slideDown();
        if ($(".moreBox:hidden").length == 0) {
            $("#loadMore").fadeOut("slow");
        }
    });
});

$(document).ready(function () {
    $(".moreBox").slice(0, 3).show();
    if ($(".blogBox:hidden").length != 0) {
        $(".loadMore").show();
    }
    $(".loadMore").on("click", function (e) {
        e.preventDefault();
        $(this)
            .parent()
            .prev()
            .children(".moreBox:hidden")
            .slice(0, 2)
            .slideDown();
        if ($(this).parent().prev().children(".moreBox:hidden").length == 0) {
            $(this).fadeOut("slow");
        }
    });
});
