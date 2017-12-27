<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
    	$action = $_POST['action'];
        include '../library/libcon.php';
        include '../library/funciones.php';
    	switch ($action) {
			case 'loadone':

				$data = $_POST['data'];
				$paso = $_POST['paso'];

				echo armarUbicacionesDetalle($data, $paso);
				break;
            case 'loadtwo':

                $data = $_POST['data'];
                $paso = $_POST['paso'];

                echo armarUbicacionesMapa($data, $paso);
                break;
            case 'showSD':
                $data = $_POST['data'];
                $paso = $_POST['paso'];

                echo showUbiDet($data, $paso);
                break;
			
			default:
				# code...
				break;
    		}	
    }
}



?>