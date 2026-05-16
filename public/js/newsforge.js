/**
 * NewsForge — interactions (Bootstrap 5 compatible)
 */
(function () {
  'use strict';

  function initSlick($) {
    if (!$.fn.slick) return;
    $('.card__post-carousel').slick({
      slidesToShow: 1,
      autoplay: true,
      dots: false,
      lazyLoad: 'progressive',
      prevArrow: "<button type='button' class='slick-prev float-start'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow: "<button type='button' class='slick-next float-end'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    });
    $('.top__news__slider').slick({
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      infinite: true,
      dots: false,
      lazyLoad: 'progressive',
      prevArrow: false,
      nextArrow: false,
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true } },
        { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
      ],
    });
    $('.article__entry-carousel').slick({
      slidesToShow: 4,
      autoplay: true,
      dots: false,
      lazyLoad: 'progressive',
      prevArrow: "<button type='button' class='slick-prev float-start'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow: "<button type='button' class='slick-next float-end'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 4, slidesToScroll: 3, infinite: true, dots: false } },
        { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 2, slidesToScroll: 1 } },
      ],
    });
    $('.article__entry-carousel-three').slick({
      slidesToShow: 3,
      autoplay: true,
      dots: false,
      lazyLoad: 'progressive',
      prevArrow: "<button type='button' class='slick-prev float-start'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow: "<button type='button' class='slick-next float-end'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 2, slidesToScroll: 3, infinite: true, dots: true } },
        { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
      ],
    });
    $('.card__post-carousel-height').slick({
      slidesToShow: 4,
      autoplay: true,
      dots: true,
      lazyLoad: 'progressive',
      prevArrow: "<button type='button' class='slick-prev float-start'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow: "<button type='button' class='slick-next float-end'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 4, slidesToScroll: 3, infinite: true, dots: true } },
        { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
      ],
    });
    $('.wrapp__list__article-responsive-carousel').slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: true,
      dots: false,
      lazyLoad: 'progressive',
      prevArrow: false,
      nextArrow: false,
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 3, infinite: true } },
        { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
      ],
    });
    $('.trending-news-slider').slick({
      infinite: true,
      arrows: true,
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: "<button type='button' class='slick-prev float-start'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow: "<button type='button' class='slick-next float-end'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
      responsive: [{ breakpoint: 768, settings: { dots: false, arrows: false } }],
    });
  }

  function initStickySidebars() {
    if (typeof StickySidebar === 'undefined') return;
    document.querySelectorAll('.sidebar-sticky').forEach(function (el) {
      try {
        new StickySidebar(el, { topSpacing: 60, bottomSpacing: 60 });
      } catch (e) {
        /* ignore missing layout */
      }
    });
  }

  window.jQuery(function ($) {
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 50) {
        $('.navbar-soft').addClass('fixed-top');
      } else {
        $('.navbar-soft').removeClass('fixed-top');
      }
    });

    initSlick($);
    initStickySidebars();

    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    if ($(window).width() < 992) {
      $('.has-megasubmenu a').on('click', function () {
        $(this).next('.megasubmenu').toggle();
      });
      $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.megasubmenu').hide();
      });
      $('.dropdown-menu a').on('click', function () {
        if ($(this).next('.submenu').length) {
          $(this).next('.submenu').toggle();
        }
      });
      $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.submenu').hide();
      });
    }

    $('[data-trigger]').on('click', function () {
      var sel = $(this).attr('data-trigger');
      $(sel).toggleClass('show');
      $('body').toggleClass('offcanvas-active');
      $('.screen-overlay').toggleClass('show');
    });

    $(document).on('keydown', function (e) {
      if (e.keyCode === 27) {
        $('.mobile-offcanvas').removeClass('show');
        $('body').removeClass('overlay-active');
      }
    });

    $('.btn-close, .screen-overlay').on('click', function () {
      $('.screen-overlay').removeClass('show');
      $('.mobile-offcanvas').removeClass('show');
      $('body').removeClass('offcanvas-active');
    });

    $('li.search > a').on('click', function (e) {
      e.preventDefault();
      $('.top-search').slideToggle(400);
      $(this).find('i').toggleClass('fa-times');
    });

    $('.dropdown-footer').on('click', function () {
      $(this).toggleClass('is-active').next('.option-content').stop().slideToggle(500);
    });

    $('a[href^="#"]').on('click', function (e) {
      var target = $(this.getAttribute('href'));
      if (target.length) {
        e.preventDefault();
        $('html, body').stop().animate({ scrollTop: target.offset().top }, 1000);
      }
    });

    $(window).on('scroll', function () {
      if ($(this).scrollTop() >= 50) {
        $('#return-to-top').fadeIn(200);
      } else {
        $('#return-to-top').fadeOut(200);
      }
    });

    $('#return-to-top').on('click', function () {
      $('body, html').animate({ scrollTop: 0 }, 500);
    });
  });
})();
