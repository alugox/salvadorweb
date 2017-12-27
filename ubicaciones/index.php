<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Ubicaciones - Salvador Hairdressing</title>

    <?php include '../c/header.php'; ?>
<link href="/c/css/ubicaciones.css" rel="stylesheet">

</head>
<body>
<div id="preloader"><div class="textload">Cargando</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="row">

    <?php include '../c/navbar.php'; ?>
  
  <div class="offset"></div> 
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row col-md-8">
        <div class="title-ubicacion text-center">
          <h1>Ubica un Salón Salvador</h1>
        </div>

        <div class="col-md-12 paises-section">
          <div class="buscar-salon">
            <h2 class="fondobuscar">Encuentra un salón.</h2>
              <div class="widget">
              <form class="searchform searchbarp" method="get">
                <input class="buscadorsl" type="text" id="autocomplete" name="s" placeholder="Buscar un salón Salvador">
                <button type="submit" class="botonbuscador btn btn-default" style="height: 60px!important; padding-left: 30px!important; padding-right: 30px!important;">Buscar</button>
                <div id="selection">
                  <br><div id="slide-portfolio" class="image-grid">
                    <div class="items-wrapper">
                      <ul class="isotope items">
                        <li class="item col-md-6 col-sm-6 marginbt10">
                          <figure class="icon-overlay"><img src="/c/img/salons/13.jpg" alt="" /></figure>
                          <div class="slide-portfolio-item-info box">
                            <h4 class="post-title">NOMBRE DE SALON</h4>
                            <div class="meta marginbt0">REGION</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="salonbuscar">
              </form>
            </div>
          </div>
          <div id="ubi1">
            <h2 class="fondobuscar">Lista de salones por país. <i class="budicon-search-3"></i></h2>
            <div class="col-md-12 lista-salon">
              <div class="col-md-6">
                  <h3><a href="#modal-ubi" data-toggle="modal"><i class="budicon-pin"></i> Venezuela</a></h3>
                  <h3><a href="#"><i class="budicon-pin"></i> Panamá</a></h3>
                  <h3><a href="#"><i class="budicon-pin"></i> Republica Dominicana</a></h3>
              </div>
              <!--/column -->

              <div class="col-md-6">
                  <h3><a href="#"><i class="budicon-pin"></i> Ecuador</a></h3>
                  <h3><a href="#"><i class="budicon-pin"></i> Curazao</a></h3>
                  <h3><a href="#"><i class="budicon-pin"></i> Estados Unidos</a></h3>
              </div>
              <!--/column -->
            </div>
          </div>

          <div class="col-sm-12">
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

      <!-- Publicidad -->
      <div class="col-md-3 col-md-offset-1 text-center publicidad">
        <div class="item caption-overlay"><img src="/c/img/fs/fs-ad-1.jpg" alt="" />
          <div class="caption bottom-left box-center">
            <div class="text-center pubcaption">
              <a target="_blank" href="/fsmag.php">
                <span class="text-center">
                  <h2 class="no-margin pubinfo">
                    <span class="subtitle-pub" style="text-transform: none;">fs Magazine</span>
                    <br>Edición 37
                  </h2>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-md-offset-1 text-center publicidad">
        <div class="item caption-overlay"><img class="imagen-pub" src="/c/img/maquina.jpg" alt="" />
          <div class="caption bottom-left box-center">
            <div class="text-center pubcaption">
              <a target="_blank" href="http://www.salvadorstore.com/">
                <span class="text-center">
                  <h2 class="no-margin pubinfo">
                    <span class="subtitle-pub">Maquina Salvador</span>
                    <br>Tienda On Line
                  </h2>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include '../c/footer.php'; ?>

</body>
  <div id="modal-ubi" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ubicaciones - <span id="ub1t"></span></h4>
        </div>
        <div class="modal-body">
          <span id="ub1c"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

</html>