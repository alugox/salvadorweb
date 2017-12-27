<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
    	$action = $_POST['action'];
    	switch ($action) {
    			case 'loadone':
    			include '../library/libcon.php';
    			include '../library/funciones.php';

    				$data = $_POST['data'];
    				$paso = $_POST['paso'];

    				echo armarUbicacionesDetalle($data, $paso);
    				break;
    			
    			default:
    				# code...
    				break;
    		}	
    }
}



?>