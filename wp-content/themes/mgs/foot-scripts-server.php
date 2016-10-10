<!-- <script src="/wp-content/themes/mgs/bower_components/jquery/dist/jquery.js"></script> -->
<script src="/wp-content/themes/mgs/bower_components/gsap/src/uncompressed/TweenMax.js"></script>
<script src="/wp-content/themes/mgs/bower_components/velocity/velocity.js"></script>
<script src="/wp-content/themes/mgs/bower_components/velocity/velocity.ui.js"></script>
<script src="/wp-content/themes/mgs/bower_components/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js"></script>

<!-- <script src="/wp-content/themes/mgs//bower_components/webcomponentsjs/webcomponents.js"></script> -->

<!-- <script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/affix.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/alert.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/modal.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/transition.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/button.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/popover.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/carousel.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/collapse.js"></script>
<script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/tab.js"></script> -->
<!-- <script src="/wp-content/themes/mgs/bower_components/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js"></script> -->
<script src="/wp-content/themes/mgs/bower_components/scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
<script src="/wp-content/themes/mgs/bower_components/scrollmagic/scrollmagic/uncompressed/plugins/animation.velocity.js"></script>
<script src="/wp-content/themes/mgs/bower_components/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>

<script src="/wp-content/themes/mgs/scripts/jquery.mobile.custom.min.js"></script>
<script src="/wp-content/themes/mgs/scripts/jquery.easing.1.3.js"></script>
<script src="/wp-content/themes/mgs/scripts/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="/wp-content/themes/mgs/scripts/jquery.localscroll-1.2.7-min.js"></script>

<script src="/wp-content/themes/mgs/scripts/main.js"></script>

<!-- Google Analytics -->
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-37414785-1', 'auto');
 ga('send', 'pageview');

</script>

<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

<script>
// Botón Arriba
  $('.home-bg').localScroll({
      target:'body'
  });

  $('#newsletter').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#newsletter').submit();
    }
  });

  function initMap() {
    
// Estilos
    var styles = [
    {
      "featureType": "landscape.man_made",
      "stylers": [
        { "color": "#e5e5e5" }
      ]
    },{
      "featureType": "landscape.natural.landcover",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#9dd7b5" }
      ]
    },{
      "featureType": "road.highway",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#ffffff" }
      ]
    },{
      "featureType": "poi",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#dbdbdb" }
      ]
    },{
      "featureType": "poi.park",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#9dd7b5" }
      ]
    },{
      "featureType": "poi.school",
      "elementType": "geometry.fill",
      "stylers": [
        { "color": "#9dd7b5" }
      ]
    },{
      "featureType": "road",
      "elementType": "geometry.stroke",
      "stylers": [
        { "color": "#ffffff" }
      ]
    },{
      "featureType": "road",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#505050" }
      ]
    },{
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        { "color": "#949494" }
      ]
    }
    ];

    var options = {
    mapTypeControlOptions: {
      mapTypeIds: ['Styled']
    },
     center: {lat: 19.34613, lng: -99.19458},
      zoom: 16,
      disableDefaultUI: true, 
      mapTypeId: 'Styled'
    };

    var mapDiv = document.getElementById('map');

    var map = new google.maps.Map(mapDiv, options);
    var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
    map.mapTypes.set('Styled', styledMapType);  

    // Marcador
    var myCenter=new google.maps.LatLng(19.33990,-99.19065);

    var marker=new google.maps.Marker({
    position:myCenter,
    icon:'/wp-content/themes/mgs/images/mgs-marker.png'
    });

    marker.setMap(map);
  }

// Formulario
  $(document).ready(function(){
    $('#contactForm').submit(function( event ) {
      // console.log( "Handler for .submit() called." );
      event.preventDefault();

      var contact = $(this);
      var method = 'POST';
      var url = '/wp-content/themes/mgs/form.php'
      var dataString = contact.serialize();

      $.ajax({
        type: method,
        url : url,
        data : dataString,
        success : function(data){
          console.log(data);
          contact[0].reset();

          if (data == 1) {
            contact.addClass('hide-form');
            $('#contactForm button').addClass('opac');
            $('#contactForm svg').addClass('opac');
            $("#contactForm button").addClass('false-click');

            $('#retro').html('¡Gracias! Estaremos en contacto');
          } else {
            contact.addClass('hide-form');
            $('#contactForm button').addClass('opac');
            $('#contactForm svg').addClass('opac');

            $('#retro').html('Hubo un problema, intenta mas tarde');
          }
          $('#retro').show();
          
        }
      })

      .fail(function() {
       });

    });

    $('#contactForm').keydown(function(e) {
      if (e.keyCode == 13) {
          $("#contactForm button").click();
      }
    });

    $('#contactForm-en').submit(function( event ) {
      // console.log( "Handler for .submit() called." );
      event.preventDefault();

      var contact = $(this);
      var method = 'POST';
      var url = '/wp-content/themes/mgs/form.php'
      var dataString = contact.serialize();

      $.ajax({
        type: method,
        url : url,
        data : dataString,
        success : function(data){
          console.log(data);
          contact[0].reset();

          if (data == 1) {
            contact.addClass('hide-form');
            $('#contactForm-en button').addClass('opac');
            $('#contactForm-en svg').addClass('opac');
            $("#contactForm-en button").addClass('false-click');

            $('#retro').html('Thanks! We´ll stay in contact.');
          } else {
            contact.addClass('hide-form');
            $('#contactForm-en button').addClass('opac');
            $('#contactForm-en svg').addClass('opac');

            $('#retro').html('There was a problem, plase try again later');
          }
          $('#retro').show();
          
        }
      })

      .fail(function() {
       });

    });

    $('#contactForm-en').keydown(function(e) {
      if (e.keyCode == 13) {
          $("#contactForm button").click();
      }
    });

  });
</script>

<script src="/wp-content/themes/mgs/scripts/select2.min.js"></script>
<script src="/wp-content/themes/mgs/scripts/jquery.auto-grow-input.min.js"></script>

 <script>
// Select del formulario
      $(".js-example-basic-single").select2({
        minimumResultsForSearch: Infinity
      });

// Crecer el input
      $('.nl-form input').autoGrowInput({
        minWidth: 204,
        maxWidth: 300,
        comfortZone: 0
      });

      $('.nl-form .mail').autoGrowInput({
        minWidth: 224,
        maxWidth: 300,
        comfortZone: 0
      });

      $(document).ready(function(){
        $('#newsletter').submit(function( event ) {
          console.log( "Handler for .submit() called." );
          event.preventDefault();

          var form = $(this);
          var method = 'POST';
          var url = 'wp-content/themes/mgs/newsletter.php'
          var dataString = form.serialize();

          $.ajax({
            type: method,
            url : url,
            data : dataString,
            success : function(data){
              console.log(data);
              form[0].reset();

              if (data == 1) {
                $('#respuesta').html('¡Gracias por suscribirte a nuestro newsletter!');
              } else {
                $('#respuesta').html('Escribe un correo electrónico válido');
              }
              $('#respuesta').show();
              
            }
          })

          .fail(function() {
           });

        });

        $('#newsletter-en').submit(function( event ) {
          console.log( "Handler for .submit() called." );
          event.preventDefault();

          var form = $(this);
          var method = 'POST';
          var url = '/wp-content/themes/mgs/newsletter.php'
          var dataString = form.serialize();

          $.ajax({
            type: method,
            url : url,
            data : dataString,
            success : function(data){
              console.log(data);
              form[0].reset();

              if (data == 1) {
                $('#respuesta').html('Thanks for your subscription!');
              } else {
                $('#respuesta').html('Write a valid email address');
              }
              $('#respuesta').show();
              
            }
          })

          .fail(function() {
           });

        });
      });
    
</script>

