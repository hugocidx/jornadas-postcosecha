(function ($) {

  "use strict";

  //===== Prealoder

  $(window).on('load', function (event) {
    $('#loader').fadeOut();
  });

  //===== Sticky header UC - cambio entre estados completo y compacto

  $(window).on('scroll', function (event) {
    var scroll = $(window).scrollTop();
    
    // Header UC compacto al hacer scroll
    if (scroll > 100) {
      $(".uc-header").addClass("scrolled");
    } else {
      $(".uc-header").removeClass("scrolled");
    }
    
    // Mantener funcionalidad original para otros headers si existen
    if (scroll < 20) {
      $(".navigation").removeClass("sticky");
    } else {
      $(".navigation").addClass("sticky");
    }
  });

  // for menu scroll 
  $('.page-scroll').click(function () {
    var hash = this.hash;
    // Ajustar offset para el header UC compacto (80px cuando está compacto)
    var offset = 80;
    var position = $(hash).offset().top - offset;
    $('html').animate({
      scrollTop: position
    }, 900);
  });

  //===== Section Menu Active

  var scrollLink = $('.page-scroll');
  // Active link switching
  $(window).scroll(function () {
    var scrollbarLocation = $(this).scrollTop();

    scrollLink.each(function () {
      // Ajustar offset para el header UC compacto
      var offset = 80;
      var sectionOffset = $(this.hash).offset().top - offset;

      if (sectionOffset <= scrollbarLocation) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    });
  });


  //===== close navbar-collapse when a  clicked

  $(".navbar-nav a").on('click', function () {
    $(".navbar-collapse").removeClass("show");
  });


  //===== Mobile Menu

  $(".navbar-toggler").on('click', function () {
    $(this).toggleClass("active");
  });

  $(".navbar-nav a").on('click', function () {
    $(".navbar-toggler").removeClass('active');
  });



  /* ==============================
  CounterUp
  ============================== */
  $('.counter').counterUp({
    time: 1000
  });

  /* ==============================
  MixitUp
  ============================== */
  $('#portfolio').mixItUp();

  /* ===================================
  PopUp Image
  =================================== */
  $('.lightbox').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true,
    }
  });


  /* ==================================
  Testimonials Carousel 
  ====================================*/
  var owl = $("#testimonials");
  owl.owlCarousel({
    navigation: false,
    pagination: true,
    slideSpeed: 1000,
    stopOnHover: true,
    autoPlay: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      }
    }
  });

  /* ================================
  Clients Sponsor 
  ================================= */
  var owl = $("#clients-scroller");
  owl.owlCarousel({
    navigation: false,
    nav: false,
    autoPlay: true,
    autoplayTimeout: 1000,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 2
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 5
      }
    }
  });

  /* ===================================
  VIDEO POP-UP
  ==================================== */
  $('.video-popup').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });

  /* ===================================
  Back Top Link
  =================================== */
  $(".back-to-top").click(function () {
    $("html,body").animate({
      scrollTop: 0
    }, 1000);
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 180) {
      $(".back-to-top").fadeIn();
    } else {
      $(".back-to-top").fadeOut();
    }
  });

  //Initiat WOW JS
  new WOW().init();


}(jQuery));
