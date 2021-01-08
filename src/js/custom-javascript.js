var $=jQuery.noConflict();

$(function(){
  var state = false;

  if (document.location.pathname !== "/") {
    $("#wrapper-navbar").removeClass("header--clear");
    $("#main-menu").removeClass("main-menu--white");
    $(".menu-icon").removeClass("menu-icon--white");
    $(".page-name").removeClass("page-name--white");
    $(".nav-icons").removeClass("nav-icons--white");
  }

  function no_scroll(){
    var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
    $(document).on(scroll_event,function(e){e.preventDefault();});
    $(document).on('touchmove.noScroll', function(e) {e.preventDefault();});
  }

  function return_scroll(){
    var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
    $(document).off(scroll_event);
    $(document).off('.noScroll');
  }

  $('.menu-icon').on('click', function(){
    if(state == false) {
      $('.sp-menu').addClass('sp-menu--open');
      $(this).addClass('open');
      state = true;
      no_scroll();
    } else {
      $('.sp-menu').removeClass('sp-menu--open');
      $(this).removeClass('open');
      state = false;
      return_scroll();
    }
  });

});

$(window).on("load",function(){
  $('.home-banner').addClass('js-home-banner');
  $('.loader').addClass('js-loader');
});


$(function(){ setTimeout('stopload()', 10000); });

function stopload(){
  $('.home-banner').addClass('js-home-banner');
  $('.loader').addClass('js-loader');
}

function init() {
  var heroHeight   = $('.home-banner').height();
  // $(".header__svg--white").removeClass("js-hidden");
  $(".header").addClass("header--clear");
  $(".menu-icon").addClass("menu-icon--white");
  $(".sp-menu").addClass("sp-menu--white");
  window.addEventListener('scroll', function(e){
    if ( $(window).scrollTop() > heroHeight ) {
      $("#wrapper-navbar").removeClass("header--clear");
      $(".menu-icon").removeClass("menu-icon--white");
      $("#main-menu").removeClass("main-menu--white");
      $(".page-name").removeClass("page-name--white");
      $(".nav-icons").removeClass("nav-icons--white");
      if ($(window).width() >= 1056) {
        $("#main-menu").removeClass("main-menu--white");
      }
    } else {
      $("#wrapper-navbar").addClass("header--clear");
      $(".menu-icon").addClass("menu-icon--white");
      $("#main-menu").addClass("main-menu--white");
      $(".page-name").addClass("page-name--white");
      $(".nav-icons").addClass("nav-icons--white");
      if ($(window).width() >= 1056) {
        $("#main-menu").addClass("main-menu--white");
      }
    }
  });
}
window.onload = init();