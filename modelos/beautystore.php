<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>Modelos de Negocio: Salvador Beauty Store - Salvador Hairdressing</title>

  <?php include '../c/header.php'; ?>
  <?php include '../library/funciones.php'; ?>

</head>
<body>
<div id="preloader2"><div class="textload">Cargando</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="row">
      <?php include '../c/navbar.php'; ?>
  <div class="post-parallax parallax inverse-wrapper" style="background-image: url(/c/img/mdn/store/main1.jpg);">
    <div class="overlay">
    <div class="container inner">
      <br><br><br><br>
      <div class="item caption-overlay">
        <div class="caption bottom-left">
          <div class="layer box">
            <div class="category cat9 logo-concepto2"><span><a id="del-foto" href="#"><img src="/c/img/logos/beauty-logo.png"></a></span></div>
            <h4 class="post-title text-right size-onmob"><!--label class="title-concepto">Un concepto exclusivo para caballeros.</label!-->
              <a class="sec-title" href="#concepto"><i class="budicon-shop icon-main"></i>Concepto</a>
              <a class="sec-title" href="#ubicaciones"><i class="budicon-location-1 icon-main"></i>Ubicaciones</a>
              <a class="sec-title" href="//www.salvadorstore.com" target="_blank"><i class="budicon-network icon-main"></i>Visitar Tienda Online</a>
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
  
  <div class="light-wrapper" id="concepto" style="background-image: url(/c/img/mdn/store/main2.jpg); background-repeat: no-repeat;">
    <div class="container inner">
      <div class="row">
        <!--/column -->
        <div class="col-md-offset-5">
          <div class="text-center"><img src="/c/img/logos/beauty-logo.png"></div><br>
          <p class="par-concepto" style="color: #000;">Somos una tienda de Belleza Integral, dedicados a la mujer, ofreciendo (productor profesionales para el cuidado y mantenimiento del cabello, manicure y pedicure, cosméticos, y artículos de cuidado personal avalados por reconocidas marcas.<br><br>Los profesionales del estilismo encuentran los artículos más novedosos del mercado, tintes para el cabello, accesorios, maquillajes, cepillos, tratamientos capilares, unidosis para todo tipo de cabello, además del asesoramiento de expertos en belleza.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="dark-wrapper" id="ubicaciones">
    <div class="container inner2">
      <h3 class="section-title text-center">Ubicaciones</h3>
      <div class="divide30"></div>
      <div id="slide-portfolio" class="image-grid">
        <div class="items-wrapper">
          <ul class="isotope items">
            <?php echo loadUbicaciones(6,1); ?>
          </ul>
        </div>
      </div>      
    </div>    
  </div>
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">

           <?php conceptosbar("mod"); ?>

      </div>
    </div>
  </div>
  
<div class="slide-portfolio-overlay"></div><!-- overlay that appears when slide portfolio content is open -->
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

<a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> <!-- close slide portfolio content --> 
<?php include '../c/footer.php'; ?>

</body>
</html>