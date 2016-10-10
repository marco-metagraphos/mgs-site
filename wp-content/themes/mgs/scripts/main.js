 $(window).on('load', function() {
    $("#cover").fadeOut(200);
});

// Fade Menú
  if (document.documentElement.clientWidth > 767) {
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(300);
      $(this).addClass('open');
      }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(300);
        $(this).removeClass('open');
    });
  }

$(document).ready(function(){


// Google maps
  $("#navModalContact").on("shown.bs.modal", function () {
      google.maps.event.trigger(map, "resize");
  });

// Menús activos
  function menuActivos () {
    if ($("body").hasClass("acerca"))
    {
        $('.liga-acerca').addClass("active");  
    }

    if ($("body").hasClass("servicios"))
    {
        $('.liga-servicios').addClass("active");  
    }

    if ($("body").hasClass("productos"))
    {
        $('.liga-productos').addClass("active");  
    }

    if ($("body").hasClass("sectores"))
    {
        $('.liga-sectores').addClass("active");  
    }
  }

  menuActivos();

// Figure overlay móvil
  $('.figure-overlay').on('touchstart',function(){
    $('.figure-overlay').removeClass('show');
    $(this).addClass('show');
  });

  // $('.figure-overlay').mouseOver(function(){
  //   $('.figure-overlay').removeClass('show');
  //   $(this).addClass('show');
  // });

// Color amarillo en Menús
  $('.dropdown a').click(function(){
    $('.dropdown a').removeClass('active-yellow');
    $(this).addClass('active-yellow');
  });

  $('.navbar-toggle').click(function(){
    $('.dropdown a').removeClass('active-yellow');
    $('body').toggleClass('body-overflow');
    $('html').toggleClass('body-overflow');
  });

  // $('button.close').click(function() {
  //   $('body').removeClass('body-overflow');
  //   $('html').removeClass('body-overflow');
  // });

  // $('.navbar-toggle.collapsed').click(function(){
  //   $('body').toggleClass('body-overflow');
  // });

  // if ($('.dropdown').hasClass('open'))
  //   {
  //     $(this).addClass('active-yellow');
  //   }

// Altura dinámica
  setHeightElements();
  $(window).resize(function() {
    setHeightElements();
  });

  var controller = new ScrollMagic.Controller();
  var scene = new ScrollMagic.Scene({triggerElement: "#trigger"})
    // trigger a velocity opaticy animation
    .setClassToggle(".navbar-mgs", "small-navbar")
    // .addIndicators() // add indicators (requires plugin)
    .addTo(controller);

  if (supportsImports()) {
    // Good to go!
    //console.log('Supports Imports');
  } else {
    // Use other libraries/require systems to load files.
    //console.log('No Supports Imports =(');
  }

});

var supportsImports = function () {
  return 'import' in document.createElement('link');
};

var setHeightElements = function() {
  $('.jumbotron-top').css({
    'height': $(document).width() * 0.392
  });

  $('.jumbotron-top.home-bg, #video').css({
    'height': $(document).width() * 0.605
  });

  // $('.jumbotron-top .container').css({
  //   'top': ($('.jumbotron-top').outerHeight() - $('.jumbotron-top .container').height())/2
  // });

  $('.half-img-bg').each(function(i, element){
    var half = $(this);
    var half_w = half.width();
    var half_h = half_w * 0.7;

    if(half_h >= 600)
      half_h = 600;

    half.css({
      'height': half_h + 'px'
    });
  });

  $('div[class^="half-"]').each(function(i, element){
    var half = $(this);
    var half_container = half.parent().parent();

    var half_h = half.height();
    var half_container_h = half_container.height();

    var half_top = (half_container_h - half_h)/2;

    half.css({
      'position': 'relative',
      'top': half_top + 'px'
    });
  });

// Filtros
  $('.btn-all').click(function(event) {
    event.preventDefault();
    $('.medios, .colaboraciones').fadeIn(200);
  });

  $('.btn-col').click(function(event) {
    event.preventDefault();
    $('.colaboraciones').fadeIn(200);
    $('.medios').fadeOut(100);
  });

  $('.btn-med').click(function(event) {
    event.preventDefault();
    $('.medios').fadeIn(200);
    $('.colaboraciones').fadeOut(100);
  });

};

//   $(document).on('click','.navbar-collapse.in',function(e) {
//     if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
//         $(this).collapse('hide');
//     }
// });