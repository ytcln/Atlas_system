$(function () {
  $('.search_conditions').click(function () {
    $(this).toggleClass('open');
    $(this).next().slideToggle();
  });

  $('.subject_edit_btn').click(function () {
    $(this).toggleClass('open');
    $(this).next().slideToggle();

  });
});
