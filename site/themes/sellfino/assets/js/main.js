var APP;

APP = {
  init: function() {
    APP.cart();
    return APP.sliders();
  },
  resizer: function() {},
  scroller: function() {
    var scroll;
    scroll = $(window).scrollTop();
    if (scroll > 50) {
      return $('header').addClass('scroll');
    } else {
      return $('header').removeClass('scroll');
    }
  },
  cart: function() {
    $('header .cart').on('click', function() {
      $('body').toggleClass('cart-opened');
      return false;
    });
    return $('body > .over, #cart .close').on('click', function() {
      $('body').removeClass('cart-opened');
      return false;
    });
  },
  sliders: function() {
    return $('section.product .slider').slick({
      arrows: true,
      dots: false
    });
  }
};

(function() {
  APP.init();
  $(window).resize(APP.resizer);
  $(window).scroll(APP.scroller);
})();
