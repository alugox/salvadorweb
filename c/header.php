<link rel="shortcut icon" href="/c/img/salvador-favi-hq.png">
<!-- Bootstrap core CSS -->
<link href="/style/css/bootstrap.min.css" rel="stylesheet">
<link href="/style/css/plugins.css" rel="stylesheet">
<link href="/style.css" rel="stylesheet">
<link href="/style/css/color/red.css" rel="stylesheet">
<link href="/style/css/custom.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="/style/type/icons.css" rel="stylesheet">
<link href="/c/fonts/fa/fontawesome.min.css" rel="stylesheet">
<link href="/c/fonts/fa/fa-brands.min.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php 
	if(isset($ubi)){
		switch ($ubi) {
			case 'contacto':
			echo '<link href="/c/css/form.css" rel="stylesheet">
				<link href="/c/css/form2.css" rel="stylesheet">';
				break;
		}
	}

 ?>
