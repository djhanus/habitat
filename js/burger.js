jQuery(function($) {
  let state = "close";

  $('.hamburger-wrapper').on('click', function() {
    $('.hamburger-menu').toggleClass('animate');

    if (state === "close") {
      $('.mobile-menu-wrapper').css("transform", "translate(0, 0)");
      state = "open";
    } else {
      $('.mobile-menu-wrapper').css("transform", "translate(-100%, 0)");
      state = "close";
    }
  })
});