$(document).ready(function () {
  $(window).scroll(function () {
    if($(this).scrollTop() > 15) {
      $('.navbar-default').addClass('-scroll');
      $('.logo').addClass('-remove');
      $('.show-logo').addClass('-white');
    } else {
      $('.navbar-default').removeClass('-scroll');
      $('.logo').removeClass('-remove');
      $('.show-logo').removeClass('-white');
    }
  });
});
