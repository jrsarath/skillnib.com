$('.droopmenu-navbar').droopmenu({
  dmOffCanvasPos: 'dmoffleft'
});
$(window).on('load resize', function () {
  var width = $(window).width();
  if ($(this).width() < 575) {
    $(".collapse_bt_mobile").attr("data-toggle", "collapse");
    $('footer .collapse.show').removeClass('show');
    $('.collapse_bt_mobile').on('click', function () {
      $(this).find(".circle-plus").toggleClass('opened');
    })
    $('.collapse_bt_mobile').on('click', function () {
      $(this).find(".circle-plus").toggleClass('closed');
    })
  } else {
    $('footer .collapse').addClass('show');
    $("footer .collapse_bt_mobile").attr("data-toggle", "");
  };
});
