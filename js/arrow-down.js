$(document).mouseup(function (e) {
  $(e.target).addClass('active');
  var container = $('.arrow-down');

  if (!container.is(e.target) && container.has(e.target).length === 0) {
    container.removeClass('move');
  }

  if (container.is(e.target)) {
    if ($(e.target).hasClass('move')) {
      $(e.target).removeClass('move');
    } else {
      $(e.target).addClass('move');
    }
  }

  if ($('.arrow-down:not(.active)').hasClass('move')) {
    $('.arrow-down:not(.active)').removeClass('move');
  }

  $(e.target).removeClass('active');
});
