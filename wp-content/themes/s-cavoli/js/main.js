(function ($) {
  'use strict';
  $(function ($) {

    $("#buttonMenu").on("click", function () {
      $(".main-menu").toggleClass("open");
    });

    $('.form-newsletter').submit(function (event) {
      event.preventDefault();
      $('.message-sent').removeClass('hidden');
    });

    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('.btn-up').fadeIn();
      } else {
        $('.btn-up').fadeOut();
      }
    });

    $('.btn-up').click(function () {
      $('html, body').animate({ scrollTop: 0 }, 800);
      return false;
    });

    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 16,
      freeMode: true,
      watchSlidesProgress: true,
      slidesPerView: 'auto',
      loopedSlides: 3,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 0,
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });

    var swiperInspires = new Swiper(".swiperInspires", {
      slidesPerView: "auto",
      loop: true,
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 0,
          centeredSlides: false,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 24,
          centeredSlides: false,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 32,
          centeredSlides: true,
        },
        1281: {
          slidesPerView: 4,
          spaceBetween: 32,
          centeredSlides: true,
        },
      },
    });

  });

})(jQuery);



