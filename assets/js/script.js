// var btn = $(".back_to_top");

// $(window).scroll(function () {
//   var windowHeight = $(window).height();
//   var scrollTop = $(this).scrollTop();
//   if (scrollTop > 1000) {
//     btn.fadeIn(500);
//   } else {
//     btn.fadeOut(500);
//   }
// });

// btn.click(function () {
//   $("html, body").animate({ scrollTop: 0 }, "slow");
// });

$(window).scroll(function () {
  posScroll = $(document).scrollTop();
  if (posScroll >= 1000) $(".top-arrow").fadeIn(600);
  else $(".top-arrow").fadeOut(600);
});
