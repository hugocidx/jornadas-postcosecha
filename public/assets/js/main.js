(function ($) {

  "use strict";

  //===== Prealoder e inicialización

  $(window).on('load', function (event) {
    $('#loader').fadeOut();
    
    // Inicializar estado del header
    $('.uc-header').addClass('header-visible');
    var currentScroll = $(window).scrollTop();
    if (currentScroll > headerHeight) {
      $('.uc-header').removeClass('header-visible').addClass('header-compact');
      $('body').addClass('header-scrolled');
      $('html').addClass('header-scrolled');
      isHeaderCompact = true;
    }
  });

  //===== Header UC inteligente con menú compacto

  var headerHeight = 160; // Altura aproximada del header UC
  var lastScrollTop = 0;
  var isHeaderCompact = false;

  $(window).on('scroll', function (event) {
    var scroll = $(window).scrollTop();
    
    // Mantener funcionalidad original para otros headers si existen
    if (scroll < 20) {
      $(".navigation").removeClass("sticky");
    } else {
      $(".navigation").addClass("sticky");
    }

    // Lógica para el header UC
    if (scroll > headerHeight && !isHeaderCompact) {
      // Activar modo compacto
      $('.uc-header').removeClass('header-visible').addClass('header-compact');
      $('body').addClass('header-scrolled');
      $('html').addClass('header-scrolled');
      isHeaderCompact = true;
    } else if (scroll <= headerHeight && isHeaderCompact) {
      // Volver a header completo
      $('.uc-header').removeClass('header-compact').addClass('header-visible');
      $('body').removeClass('header-scrolled');
      $('html').removeClass('header-scrolled');
      isHeaderCompact = false;
    }

    lastScrollTop = scroll;
  });

  // for menu scroll - Optimizado para respuesta rápida
  $('.page-scroll').click(function (e) {
    e.preventDefault(); // Prevenir comportamiento por defecto
    
    var hash = this.hash;
    var $target = $(hash);
    
    // Verificar que el elemento objetivo existe
    if ($target.length) {
      // Feedback visual inmediato
      $(this).addClass('active-click');
      setTimeout(() => $(this).removeClass('active-click'), 200);
      
      // Determinar offset basado en el estado actual del header
      var offset;
      if (isHeaderCompact || $(window).scrollTop() > headerHeight) {
        // Header compacto - solo menú visible
        offset = window.innerWidth > 991 ? 60 : 50;
      } else {
        // Header completo visible
        offset = window.innerWidth > 991 ? 180 : 100;
      }
      
      var position = $target.offset().top - offset;
      
      // Usar animación optimizada con fallback
      $('html, body').stop().animate({
        scrollTop: position
      }, {
        duration: 350,
        easing: 'swing', // Más compatible que easeOutQuart
        complete: function() {
          // Actualizar URL sin recargar página
          if (history.pushState) {
            history.pushState(null, null, hash);
          }
        }
      });
    }
    
    return false;
  });

  //===== Section Menu Active

  var scrollLink = $('.page-scroll');
  // Active link switching
  $(window).scroll(function () {
    var scrollbarLocation = $(this).scrollTop();

    scrollLink.each(function () {
      // Determinar offset basado en el estado actual del header
      var offset;
      if (isHeaderCompact || scrollbarLocation > headerHeight) {
        // Header compacto - solo menú visible
        offset = window.innerWidth > 991 ? 60 : 50;
      } else {
        // Header completo visible
        offset = window.innerWidth > 991 ? 180 : 100;
      }
      
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

  //===== Contadores animados - Versión simplificada
  var countersStarted = false;
  
  function startCounters() {
    if (countersStarted) return;
    
    var counters = document.querySelectorAll('.counter');
    if (counters.length === 0) return;
    
    countersStarted = true;
    console.log('🎯 Iniciando contadores...');
    
    counters.forEach(function(counter, index) {
      var target = parseInt(counter.getAttribute('data-count'));
      if (isNaN(target)) return;
      
      console.log('🔢 Contador', index + 1, '- Target:', target);
      
      var current = 0;
      var increment = target / 100; // 100 pasos
      var timer = setInterval(function() {
        current += increment;
        if (current >= target) {
          counter.textContent = target;
          clearInterval(timer);
          console.log('✅ Contador', index + 1, 'completado');
        } else {
          counter.textContent = Math.floor(current);
        }
      }, 20); // 20ms entre pasos = 2 segundos total
    });
  }
  
  function isStatsVisible() {
    var statsSection = document.querySelector('.stats-section');
    if (!statsSection) return false;
    
    var rect = statsSection.getBoundingClientRect();
    var windowHeight = window.innerHeight;
    return rect.top < windowHeight * 0.8;
  }
  
  // Verificar inmediatamente al cargar
  $(document).ready(function() {
    console.log('📄 Documento listo');
    setTimeout(function() {
      if (isStatsVisible()) {
        console.log('👁️ Sección visible al cargar');
        startCounters();
      }
    }, 1000);
  });
  
  // Verificar al hacer scroll
  $(window).scroll(function() {
    if (!countersStarted && isStatsVisible()) {
      console.log('👁️ Sección visible por scroll');
      startCounters();
    }
  });
  
  // Botón de prueba para forzar animación (solo para debug)
  $(document).ready(function() {
    if (window.location.hash === '#debug') {
      $('body').prepend('<button id="testCounters" style="position:fixed;top:10px;right:10px;z-index:9999;background:red;color:white;padding:10px;">Test Counters</button>');
      $('#testCounters').click(function() {
        countersStarted = false;
        $('.counter').text('0');
        startCounters();
      });
    }
  });

  //Initiat WOW JS
  new WOW().init();


}(jQuery));
