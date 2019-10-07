feather.replace();

/*=============================
 * Smooth Scrolling Function
 *=============================*/

function smoothScroller() {
    var scrollLink = $('.scroll');

    // Smooth scrolling
    scrollLink.click(function (e) {
        e.preventDefault();
        $('body,html').delay(100).animate({
            scrollTop: $(this.hash).offset().top
        }, 1500);
    });

}

smoothScroller();

