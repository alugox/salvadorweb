<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>Modelos de Negocio: Instituto de Belleza - Salvador Hairdressing</title>

  <?php include '../c/header.php'; ?>
  <?php include '../library/funciones.php'; ?>

</head>
<body>
<div id="preloader2"><div class="textload">Cargando</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <div class="row">

    <?php include '../c/navbar.php'; ?>

  
  <div class="post-parallax parallax inverse-wrapper" style="background-image: url('/c/img/mdn/inst/main1.jpg');">
    <div class="overlay">
    <div class="container inner">
      <!-- /.headline --> 

      <br><br><br><br>
      <div class="item caption-overlay">
        <div class="caption bottom-left">
          <div class="layer box">
            <div class="category cat9 logo-concepto"><span><a id="foto-concepto" href="blog-post.html"><img src="/c/img/logos/instituto-logo.png"></a></span></div>
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
  </div>
  </div>

  <div class="light-wrapper" id="concepto" style="background-image: url(/c/img/textback-instituto2.jpg); background-repeat: no-repeat;">
    <div class="container inner">
      <div class="row">
        <!--/column -->
        <div class="col-md-offset-5">
          <div class="text-center"><img src="/c/img/logos/instituto-logo.png"></div><br>
          <p class="par-concepto text-black">Es la esencia de Salvador y nuestro modelo de negocio  original, en cuyas instalaciones, se brinda un servicio integral de estética, garantizándole a toda la familia una atmósfera de calidad, cordialidad y confort. En los Institutos de Belleza se encontrará  servicios de estética facial, estética corporal, servicios integrales de peluquería y todos los servicios relacionados con manos y pies.</p><br>
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

            <?php echo loadUbicaciones(1,1); ?>

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

  <!-- /footer --> 
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
          <div id="map" style="height: 360px;">
            <span id="mapslideubi"></span>
          </div>          
      </div>
    </div>
  </div>
</div>

<a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> <!-- close slide portfolio content -->     

<?php include '../c/footer.php'; ?>

</body>
</html>