var $=jQuery.noConflict();

$(function(){
  var state = false;

  if (document.location.pathname !== "/") {
    $('.header__svg--white').addClass("js-hidden");
    $(".header").removeClass("header--clear");
    $("#main-menu").removeClass("main-menu--white");
    $(".menu-icon").removeClass("menu-icon--white");
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