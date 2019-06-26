        var scrollCb = function () {
        var tiles = $(".tile:not(.animated)");
        var $window = $(window);
        var b = $window.scrollTop() + $window.height();

        tiles.each(function (i) {
            var $this = $(this);
            var a = $this.offset().top + $this.height();

            if (a < b) {
                $this.addClass("animated").addClass("fadeInUp");
            }
        });
    };

    $(scrollCb);

    $(window).scroll(scrollCb);
  