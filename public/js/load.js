$(function () {
    $(".featured1").slice(0, 4).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".featured1:hidden").slice(0, 4).slideDown();
        if ($(".featured1:hidden").length == 0) {
            $("#load").fadeOut('fast');
        }

    });
});