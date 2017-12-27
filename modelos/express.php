<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>Modelos de Negocio: Express - Salvador Hairdressing</title>

  <?php include '../c/header.php'; ?>
  <?php include '../library/funciones.php'; ?>

</head>
<body>
<div id="preloader2"><div class="textload">Cargando</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="row">

    <?php include '../c/navbar.php'; ?>
  
  <div class="post-parallax parallax inverse-wrapper" style="background-image: url(/c/img/express.jpg);">
    <div class="overlay">
    <div class="container inner">
      <!-- /.headline --> 

      <br><br><br><br>
      <div class="item caption-overlay">
        <div class="caption bottom-left">
          <div class="layer box">
            <div class="category cat9 logo-concepto"><span><a href="#"><img src="/c/img/logos/express-logo.png"></a></span></div>
            <h4 class="post-title text-right"><!--label class="title-concepto">Un concepto exclusivo para caballeros.</label!-->
              <a class="sec-title" href="#concepto"><i class="budicon-shop icon-main"></i>Concepto</a>
              <a class="sec-title" href="#ubicaciones"><i class="budicon-location-1 icon-main"></i>Ubicaciones</a>
            </h4>
          </div>
          <!-- /.layer -->
        </div>
      </div>
      <!-- /.caption -->

    </div>
    <!--/.container --> 
  </div>
  </div>
  <!--/.parallax --> 
  
  <div class="light-wrapper" id="concepto" style="background-image: url(/c/img/mdn/exp/main2.jpg);">
    <div class="container inner">
      <div class="row">
        <!--/column -->
        <div class="col-sm-7 col-md-offset-5">
          <h3 class="section-title" style="color:#fff;">EXPRESS</h3>
          <p class="par-concepto" style="color:#fff;">Este concepto innovador nace en el 2004 con la finalidad de ofrecer a toda la familia un servicio caracterizado por su dinamismo y eficiencia, manteniendo la calidad y profesionalismo que caracteriza al Grupo Salvador.<br><br>En los Centros Express se ofrecen servicios capilares, cortes, secados, depilaciones faciales, coloración, arreglo de manos y pies. Además con un horario adaptado a tus necesidades desde las 6:30 am y hasta las 8:00pm… Porque queremos simplificar tu Vida.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="dark-wrapper" id="ubicaciones">
    <div class="container inner2">
      <h3 class="section-title text-center">Ubicaciones</h3>
      <!--p class="text-center">Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p-->
      <div class="divide30"></div>
      <div id="slide-portfolio" class="image-grid">
        <div class="items-wrapper">
          <ul class="isotope items">
            <?php echo loadUbicaciones(2,1); ?>
          </ul>
        </div>
      </div>
      
    </div>    
  </div>
  <div class="light-wrapper">
    <div class="container" style="padding-bottom: 50px;">
      <div class="row">
           <?php conceptosbar("mod"); ?>
      </div>
    </div>
  </div>


<div class="slide-portfolio-overlay"></div>
</main>
<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-1">
  <div class="slide-portfolio-item-detail">
    <div class="inner2">
      <span id="contentslideubi"></span>

      <div class="divide25"></div>
      <div class="row">
          <h3>Google Map</h3>
          <div id="map" style="height: 360px;"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1xdEVYy8IZdBKJGQp_QpDWaNQT7ZHGhY&amp;sensor=false&amp;extension=.js"></script> 
          <script> google.maps.event.addDomListener(window, 'load', init);
            var map;
            function init() {
                var mapOptions = {
                    center: new google.maps.LatLng(51.211215, 3.226287),
                    zoom: 15,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT,
                    },
                    disableDoubleClickZoom: false,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    },
                    scaleControl: true,
                    scrollwheel: false,
                    streetViewControl: true,
                    draggable : true,
                    overviewMapControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{stylers:[{saturation:-100},{gamma:1}]},{elementType:"labels.text.stroke",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.business",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.text",stylers:[{visibility:"off"}]},{featureType:"poi.place_of_worship",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{visibility:"simplified"}]},{featureType:"water",stylers:[{visibility:"on"},{saturation:50},{gamma:0},{hue:"#50a5d1"}]},{featureType:"administrative.neighborhood",elementType:"labels.text.fill",stylers:[{color:"#333333"}]},{featureType:"road.local",elementType:"labels.text",stylers:[{weight:0.5},{color:"#333333"}]},{featureType:"transit.station",elementType:"labels.icon",stylers:[{gamma:1},{saturation:50}]}]
                }

                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var locations = [
                    ['Boudewijn Ostenstraat 2', 51.211215, 3.226287]
                ];
                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        icon: 'style/images/map-pin.png',
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });
                }
            }
            </script> 
        </div>

    </div>
  </div>
</div>

<a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> 

<?php include '../c/footer.php'; ?>

</body>
</html>