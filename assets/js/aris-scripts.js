feather.replace();

/*=============================
 * Smooth Scrolling Function
 *=============================*/

var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 800
});

/*=============================
 * dropdown on hover
 *=============================*/
document.querySelector('.dropdown-toggle').addEventListener('click', () => {
  console.log('clicked');
});

$('ul.navbar-nav li.dropdown').hover(
  function() {
    $(this)
      .find('.dropdown-menu')
      .stop(true, true)
      .delay(200)
      .fadeIn(500);
  },
  function() {
    $(this)
      .find('.dropdown-menu')
      .stop(true, true)
      .delay(200)
      .fadeOut(500);
  }
);
