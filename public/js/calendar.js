$(function () {
  $('.reserve-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var reserve_day = $(this).attr('reserve_day');
    var reserve_time = $(this).attr('reserve_time');
    $('.modal-space-day span').text(reserve_day);
    $('.modal-space-time span').text(reserve_time);
    return false;
  });
  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });

});
