<?php 

function loadUbicaciones($where, $paso){
	include 'libcon.php';
	$sql = "SELECT * FROM web_salones WHERE concepto = $where AND estado = 1 ORDER BY regionsalon ASC;";
	$result = miBusquedaSQL($sql);
	$ubica = armarUbicaciones($result, $paso);
	//var_dump($result);
	return $ubica;
}

function armarUbicaciones($result, $paso){
	$resu = (array) json_decode($result, true);
	$element="";

	foreach ($resu as $re) {
		$element .= '<li class="item col-md-3 col-sm-6 marginbt10">
              <figure class="icon-overlay"><a href="#0" data-type="slide-portfolio-item-1" data-sid="'.$re["ID"].'"><img src="/c/img/salons/'.$re["URL_IMG_THUMB"].'" alt="" /></a></figure>
              <div class="slide-portfolio-item-info box">
                <h4 class="post-title">'.$re["NOMBRECOMPLETO"].'</h4>
                <div class="meta marginbt0">'.cambiarRegion($re["REGIONSALON"]).'</div>
              </div>
            </li>';
	}
	return $element;
}

function armarUbicacionesDetalle($data, $paso){
	$sql = "SELECT * FROM web_salones WHERE ID = '".$data."';";
	$resu = (array) json_decode(miBusquedaSQL($sql), true);
	
	$element="";

	foreach ($resu as $re) {
		$element .= '<h2 class="text-center">'.$re["NOMBRECOMPLETO"].'<br></h2><h4 class="text-center">'.cambiarRegion($re["REGIONSALON"]).'</h4><br>
      <div class="row text-center"><img src="/c/img/salons/'.$re["URL_IMG"].'" width="80%" alt=""></div>
      <p class="text-center"><br>
        <b>Dirección:</b> '.$re["DIRECCION"].'</b>
        <br><b>Teléfonos:</b> '.$re["TELEFONO1"].'/ '.$re["TELEFONO1"].'
      </p>';
	}
	return $element;
}

function cambiarRegion($entrada){
	$region = "";
	switch ($entrada) {
		case '1':
			$region = "Venezuela";
			break;
		case '2':
			$region = "Panamá";
			break;
		case '3':
			$region = "Estados Unidos";
			break;
		case '72':
			$region = "República Dominicana";
			break;
		case '249':
			$region = "Colombia";
			break;
		case '302':
			$region = "Ecuador";
			break;
		case '304':
			$region = "Curazao";
			break;
		case '376':
			$region = "México";
			break;
		case '378':
			$region = "Perú";
			break;
	}
	return $region;
}

function conceptosbar($ubi){
  if($ubi == "mod"){
    $texto = "Modelos de Negocio";
  } else {
    $texto = "Nuestros Conceptos";
  }
	echo '<div class="blog-posts grid-view grid-concepto">
            <h2 class="post-title text-center texttipo2">'.$texto.'</h2>
            <div class="isotope row">
              <div class="col-md-2 col-sm-6 grid-view-post item">
                <div class="item1 post">
                  <div class="box text-center">
                    <a href="/modelos/instituto.php"><img src="/c/img/logos/instituto-logo.png"></a>
                  </div>                  
                </div>
              </div>
              
              <div class="col-md-2 col-sm-6 grid-view-post item">
                <div class="item1 post">
                  <div class="box text-center">
                    <a href="/modelos/express.php"><img src="/c/img/logos/express-logo.png"></a>
                  </div>                  
                </div>
              </div>

              <div class="col-md-2 col-sm-6 grid-view-post item">
                <div class="item1 post">
                  <div class="box text-center">
                    <a href="/modelos/uomo.php"><img src="/c/img/logos/uomologo.png"></a>
                  </div>                  
                </div>
              </div>

              <div class="col-md-2 col-sm-6 grid-view-post item">
                <div class="item1 post">
                  <div class="box text-center">
                    <a href="/modelos/kids.php"><img src="/c/img/logos/kids-logo.png"></a>
                  </div>
                </div>
              </div>

              <div class="col-md-2 col-sm-6 grid-view-post item">
                <div class="item1 post">
                  <div class="box text-center">
                    <a href="/modelos/nailsbar.php"><img src="/c/img/logos/nails-logo.png"></a>
                  </div>                  
                </div>
              </div>

              <div class="col-md-2 col-sm-6 grid-view-post item">
                <div class="item1 post">
                  <div class="box text-center">
                    <a href="/modelos/beautystore.php"><img src="/c/img/logos/beauty-logo.png"></a>
                  </div>                  
                </div>
              </div>              
            </div>            
          </div>';
    return;
}

function miBusquedaSQL($sql){

    $dbh = conex();
    mysqli_set_charset($dbh, 'utf8');

    if (!$dbh) {
        die('Error en Conexión: ' . mysqli_error($dbh));
        echo "Error BD";
        exit;
    }
    $textsql = $sql;
    $search = mysqli_query($dbh, $textsql) or die("<div class='alert alert-danger'><strong>Error 002:</strong>".mysqli_error($dbh)."</div>");
    $result = array();
    $i = 0;
    $match = mysqli_num_rows($search);
    if ($match > 0) {
        while ($rw = mysqli_fetch_array($search)) {
            $result[$i] = $rw;
            $i++;
        }

    } else {
        $result[0] = "0";
    }
    return json_encode($result);
}

function miActionSQL($sql){

    $dbh = conex();
    mysqli_set_charset($dbh, 'utf8');
    $resultado = 0;
    if (!$dbh) {
        die('Error en Conexión: ' . mysqli_error($dbh));
        $resultado = 0;
        exit;
    }
    $textsql = $sql;
    if (mysqli_query($dbh, $textsql)) {
        $resultado = 1;
    } else{
        $resultado = "0;".mysqli_error($dbh);
    }

    mysqli_close($dbh);
    return $resultado;
}


?>