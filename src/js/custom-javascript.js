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
    if (document.location.pathname === "/") {
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
    }
  });
}
window.onload = init();

// Productos
if (document.location.pathname === "/productos/") {
  const products = [
    {
      "name": "Frutos Secos",
      "items": [
        {
          "name": "Nueces",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 23,
            "500g": 9,
            "250g": 5,
          },
        },
        {
          "name": "Pecanas",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 24,
            "500g": 10,
            "250g": 5,
          },
        },
        {
          "name": "Cashew",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 15,
            "500g": 7,
            "250g": 5,
          },
        },
        {
          "name": "Cashew",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 15,
            "500g": 7,
            "250g": 5,
          },
        },
        {
          "name": "Cashew",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 15,
            "500g": 7,
            "250g": 5,
          },
        },
        {
          "name": "Cashew",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 15,
            "500g": 7,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Frutos Deshidratados",
      "items": [
        {
          "name": "Pasas Negras",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 22,
            "500g": 9,
            "250g": 5,
          },
        },
        {
          "name": "Pasas Rubias",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 21,
            "500g": 10,
            "250g": 5,
          },
        },
        {
          "name": "Guindones",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 34,
            "500g": 7,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Snacks",
      "items": [
        {
          "name": "Chifles",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 16,
            "500g": 9,
            "250g": 5,
          },
        },
        {
          "name": "Chifles dulces",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 18,
            "500g": 10,
            "250g": 5,
          },
        },
        {
          "name": "Habas Fritas",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 14,
            "500g": 7,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Semillas",
      "items": [
        {
          "name": "Girasol",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 30,
            "500g": 9,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Menestras",
      "items": [
        {
          "name": "Frejol",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 20,
            "500g": 9,
            "250g": 5,
          },
        },
        {
          "name": "Garbanzo",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 28,
            "500g": 10,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Harinas - Hojuelas",
      "items": [
        {
          "name": "Avena",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 19,
            "500g": 9,
            "250g": 5,
          },
        },
        {
          "name": "Harina",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 18,
            "500g": 10,
            "250g": 5,
          },
        },
        {
          "name": "Maíz",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 15,
            "500g": 7,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Especias",
      "items": [
        {
          "name": "Paprika",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 17,
            "500g": 9,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Otros",
      "items": [
        {
          "name": "Otros 1",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 16,
            "500g": 9,
            "250g": 5,
          },
        },
        {
          "name": "Otros 2",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 15,
            "500g": 9,
            "250g": 5,
          },
        },
      ],
    },
    {
      "name": "Mix",
      "items": [
        {
          "name": "Mix de Nueces",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 23,
            "500g": 9,
            "250g": 5,
          },
        },
        {
          "name": "Mix Pkana",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 24,
            "500g": 10,
            "250g": 5,
          },
        },
        {
          "name": "Mix Familiar",
          "image": "https://picsum.photos/600/400",
          "price": {
            "1Kg": 15,
            "500g": 7,
            "250g": 5,
          },
        },
      ],
    },
  ];
  
  let slider = document.getElementsByClassName("splide__slide");
  let divProducts = [];
  let divProductItems = '';
  let productItems = [];
  let productItem = {};

  for (let i=0; i < slider.length; i++) {
    divProductItems = '';
    productItems = products[i]["items"];
    for (let j=0; j < productItems.length; j++) {
      productItem = productItems[j];
      divProductItems = divProductItems + addParamsToProductItem(productItem); // Arma la seccion completa de los items de un producto. Ejm: Frutos Secos: Nueces, Pecanas, Cashew
    }
    divProducts.push(divProductItems);

    slider.item(i).addEventListener("click", () => {
      $(".product-items .product-item").remove();
      $(".product-title h2").remove();
      
      $(".product-title").append(`<h2>${products[i]["name"]}</h2>`).hide().show('slow');
      $(".product-items").append(divProducts[i]).hide().show('slow');
    });
  }
  $(".product-items").append(divProducts[0]);

function addParamsToProductItem(productItem) { // Funcion para agregar parametros de un item a su respectiva tarjeta
  let productItemPriceKeys = Object.keys(productItem["price"]);
  return `<div class="product-item col-md-6 col-lg-3 mb-3" data-aos="fade-up"><div class="card"><img class="card-img-top" src="${productItem["image"]}" alt="Card image cap"><div class="card-body"><h3 class="card-title">${productItem["name"]}</h3><h4 class="card-subtitle text-muted mb-1">Precio</h4><ul class="price-list"><li class="mb-1">${productItemPriceKeys[0]} - S/${productItem["price"]["1Kg"]}</li><li class="mb-1">${productItemPriceKeys[1]} - S/${productItem["price"]["500g"]}</li><li class="mb-1">${productItemPriceKeys[2]} - S/${productItem["price"]["250g"]}</li></ul></div></div></div>`;
}

}

let yellow_bg = '#efea68';
let light_brown_bg = '#c9ad79';