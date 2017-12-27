}<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>Modelos de Negocio: UOMO - Salvador Hairdressing</title>

  <?php include '../c/header.php'; ?>
  <?php include '../library/funciones.php'; ?>

</head>
<body>
<div id="preloader2"><div class="textload">Cargando</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="row">

    <?php include '../c/navbar.php'; ?>
  
  <div class="post-parallax parallax inverse-wrapper" style="background-image: url(/c/img/uomo2.jpg);">
    <div class="overlay">
    <div class="container inner">
      <!-- /.headline --> 

      <br><br><br><br>
      <div class="item caption-overlay">
        <div class="caption bottom-left">
          <div class="layer box">
            <div class="category cat9 logo-concepto"><span><a id="foto-concepto" href="#"><img src="/c/img/logos/uomologo.png"></a></span></div>
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

  <div class="light-wrapper" id="concepto" style="background-image: url(/c/img/textback-uomo.jpg); background-repeat: no-repeat;">
    <div class="container inner">
      <div class="row">
        <!--/column -->
        <div class="col-md-offset-5">
          <div class="text-center"><img src="../c/img/logos/uomologo.png"></div><br>
          <p class="par-concepto text-black">Es una propuesta vanguardista de espacios exclusivos dedicados al cuidado estético del hombre y de su imagen personal. Ofrece un ambiente diseñado para atender las exigencias del hombre moderno. Salvador UOMO, brinda un trato personalizado donde la puntualidad y la eficiencia hacen la diferencia.</p><br>
          <div class="small-quote">
            <blockquote class="text-black">
              <p>La diferencia entre estilo y moda es la calidad.</p>
            </blockquote>
            <cite class="text-black"> — Giorgio Armani</cite>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->

  <div class="dark-wrapper" id="ubicaciones">
    <div class="container inner2">
      <h3 class="section-title text-center">Ubicaciones</h3>
      <!--p class="text-center">Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p-->
      <div class="divide30"></div>
      <div id="slide-portfolio" class="image-grid">
        <div class="items-wrapper">
          <ul class="isotope items">
            <?php echo loadUbicaciones(4,1); ?>
          </ul>
        </div>
        <!--/.items-wrapper --> 
      </div>
      <!-- slide-portfolio --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container" style="padding-bottom: 50px;">
      <div class="row">
           <?php conceptosbar("mod"); ?>

      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
<div class="slide-portfolio-overlay"></div><!-- overlay that appears when slide portfolio content is open -->
</main>
<!--/.body-wrapper --> 

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
        <!--/column --> 
      <!-- Instagram feed 
        <div class="container inner">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <h2>Instagram Feed</h2>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo.</p>
              <div class="divide10"></div>
              <a href="https://instagram.com/urbanshots/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
            <div class="col-sm-8 col-md-9">
              <div class="image-grid col5">
                <div class="items-wrapper">
                  <div id="instafeed" class="isotope items" data-limit="5"></div>
                </div>
              </div>
            </div>
          </div>
        </div>--> 
        <!--/.container -->
    </div>
    <!-- .inner --> 
  </div>
</div>

<!-- slide-portfolio-item-content --> 
<a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> <!-- close slide portfolio content --> 

<?php include '../c/footer.php'; ?>

</body>
</html>